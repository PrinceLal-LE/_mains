@extends('layouts.app')

@section('title', 'SCG | ' . ucfirst($type) . ' Projects')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center">{{ ucfirst($type) }} Projects</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse ($projects as $project)
            {{-- Calculate the correct index across all pages --}}
            @php
                $imageIndex = (($projects->currentPage() - 1) * $projects->perPage()) + $loop->iteration;
            @endphp

            <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                
                {{-- Condition 1: Handle PDF Files --}}
                @if (str_contains($project['File_name'], 'PDF'))
                    {{-- Show a generic placeholder or icon for PDFs --}}
                    <a href="{{ asset('images/projects/' . $project['Image_File']) }}" target="_blank" class="w-full h-48 bg-gray-200 flex items-center justify-center">
                        <!-- <svg class="w-16 h-16 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg> -->
                        <img src="{{ asset('images/image_pdf.png') }}" alt="PDF Icon" class="w-full h-48 object-contain p-4 bg-gray-200">
                    </a>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">PDF - {{ $imageIndex }}</h3>
                        <a href="{{ asset('images/projects/' . $project['Image_File']) }}" target="_blank" class="inline-block w-full text-center bg-[#c0392b] text-white py-2 px-4 rounded-md hover:bg-[#e74c3c] transition-colors">
                            View PDF
                        </a>
                    </div>
                
                {{-- Condition 2: Handle Floor Plan Files --}}
                @elseif (str_contains($project['File_name'], 'Floor Plan'))
                     <a href="{{ asset('images/projects/' . $project['Image_File']) }}" target="_blank">
                        <img src="{{ asset('images/projects/' . $project['Image_File']) }}" alt="Floor Plan - {{ $imageIndex }}" class="w-full h-48 object-cover">
                     </a>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Floor Plan - {{ $imageIndex }}</h3>
                        <a href="{{ asset('images/projects/' . $project['Image_File']) }}" target="_blank" class="inline-block w-full text-center bg-[#003347] text-white py-2 px-4 rounded-md hover:bg-[#004a66] transition-colors">
                            View Full Image
                        </a>
                    </div>

                {{-- Default Condition: Handle regular Images --}}
                @else
                    <a href="{{ asset('images/projects/' . $project['Image_File']) }}" target="_blank">
                        <img src="{{ asset('images/projects/' . $project['Image_File']) }}" alt="Image - {{ $imageIndex }}" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Image - {{ $imageIndex }}</h3>
                        <!-- <p class="text-sm text-gray-600 mb-4">Serial Number: {{ $project['Serial_number'] }}</p> -->
                        <a href="{{ asset('images/projects/' . $project['Image_File']) }}" target="_blank" class="inline-block w-full text-center bg-[#003347] text-white py-2 px-4 rounded-md hover:bg-[#004a66] transition-colors">
                            View Full Image
                        </a>
                    </div>
                @endif
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                <p>No projects found for this category.</p>
            </div>
        @endforelse
    </div>

    {{-- Pagination Links --}}
    <div class="mt-12">
        {{ $projects->links() }}
    </div>
</div>
@endsection