<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectController extends Controller
{
    public function index($type)
    {
        // If type comes from route defaults (for the named routes)
        $type = $type ?? request()->route('type');

        $validTypes = ['residential', 'commercial', 'other'];

        if (!in_array($type, $validTypes)) {
            abort(404);
        }

        $csvUrl = env('GOOGLE_SHEET_CSV_URL');
        if (!$csvUrl) {
            abort(500, 'Google Sheet URL is not configured in .env file.');
        }

        // Use withoutVerifying() for local development if you have SSL issues
        $response = Http::withoutVerifying()->get($csvUrl);

        if (!$response->successful()) {
            abort(500, 'Failed to fetch data from the Google Sheet URL.');
        }

        // Split rows by new line
        $dataRows = explode("\n", $response->body());

        // Trim whitespace from each header column
        $header = array_map('trim', str_getcsv(array_shift($dataRows)));

        $posts = collect($dataRows)
            // -- THIS IS THE NEW PART --
            // First, filter out any rows that are completely empty or just whitespace
            ->filter(function ($row) {
                return !empty(trim($row));
            })
            ->map(function ($row) use ($header) {
                $rowData = str_getcsv($row);
                // Check if the number of columns match the header
                if (count($header) === count($rowData)) {
                    // Trim whitespace from each value in the row
                    $trimmedRowData = array_map('trim', $rowData);
                    return array_combine($header, $trimmedRowData);
                }
                return null;
            })
            ->filter(); // This final filter removes any rows that were null

        // Filter where the 'Project_type' column matches the requested $type
        $projects = $posts->where('Project_type', $type);

        $perPage = 20;
        $page = request()->get('page', 1);
        $paginatedProjects = new LengthAwarePaginator(
            $projects->forPage($page, $perPage)->values(),
            $projects->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('Frontend.project', [
            'projects' => $paginatedProjects,
            'type' => $type
        ]);
    }
}
