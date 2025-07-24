<footer class="w-full">
    <div class="mx-auto max-w-7xl">
        <!--Grid-->
        <div class="grid grid-cols-2 lg:grid-cols-4 2xl:grid-cols-6 gap-8 py-10 ">
            <div class="col-span-full mb-10 2xl:col-span-2 lg:mb-0 flex items-center flex-col 2xl:items-start">
                <a href="{{ route('index') }}" class="flex justify-center items-center text-xl lg:justify-start">
                    <img src="{{ asset('images/favicon-32x32.png') }}" alt="">
                    Sagar Construction Group
                </a>
                <div
                    class="flex items-center justify-between w-full max-w-xl mx-auto flex-col  2xl:flex-col 2xl:items-start">
                    <p class="py-8 text-sm text-gray-500 lg:max-w-xs text-center lg:text-left">Building with innovation and integrity – shaping the future of construction</p>
                    <a href="{{ route('contact') }}"
                        class="py-2.5 px-5 h-9 block w-fit bg-gradient-to-b from-[#e5a55d] to-[#ff7b02]  rounded-full shadow-sm text-xs text-white mx-auto transition-all  duration-500 hover:bg-indigo-700 lg:mx-0">
                        Contact us </a>
                </div>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-center">
                <h4 class="text-lg text-gray-900 font-medium mb-7">Our Website</h4>
                <ul class="text-sm  transition-all duration-500 ">
                    <li class="mb-6">
                        <a href="{{ route('index') }}" class="text-gray-600 hover:text-gray-900">Home</a>
                    </li>
                    <li class="mb-6">
                        <a href="{{ route('about') }}" class=" text-gray-600 hover:text-gray-900">About</a>
                    </li>
                    <li class="mb-6">
                        <a href="{{ route('services') }}" class=" text-gray-600 hover:text-gray-900">Services</a>
                    </li>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-center">
                <h4 class="text-lg text-gray-900 font-medium mb-7">About Us</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6">
                        <a href="javascript:;" class="text-gray-600 hover:text-gray-900">Founder</a>
                    </li>
                    <li class="mb-6">
                        <a href="javascript:;" class=" text-gray-600 hover:text-gray-900">Team</a>
                    </li>
                    <li class="mb-6">
                        <a href="javascript:;" class=" text-gray-600 hover:text-gray-900">Gallery</a>
                    </li>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-center">
                <h4 class="text-lg text-gray-900 font-medium mb-7">Project</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6">
                        <a href="javascript:;" class="text-gray-600 hover:text-gray-900">Residential Projects</a>
                    </li>
                    <li class="mb-6">
                        <a href="javascript:;" class=" text-gray-600 hover:text-gray-900">Commerical Projects</a>
                    </li>
                    <li class="mb-6">
                        <a href="javascript:;" class=" text-gray-600 hover:text-gray-900">Other Projects</a>
                    </li>
                </ul>
            </div>          
            <!--End Col-->
            <div class="lg:mx-auto text-center">
                <h4 class="text-lg text-gray-900 font-medium mb-7">Services</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6">
                        <a href="javascript:;" class="text-gray-600 hover:text-gray-900">Vastu</a>
                    </li>
                    <li class="mb-6">
                        <a href="javascript:;" class=" text-gray-600 hover:text-gray-900">Architecture</a>
                    </li>
                    <li class="mb-6">
                        <a href="javascript:;" class=" text-gray-600 hover:text-gray-900">Structure</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Grid-->
        <div class="py-4 border-t border-gray-200">
            <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">
                <span class="text-sm text-gray-500 ">©<a href="{{ route('index') }}">Sagar Construction Group</a> 2025, All rights
                    reserved.</span>
                <div class="flex mt-4 space-x-4 sm:justify-center lg:mt-0 ">
                    <a href="https://www.linkedin.com/in/princelal-cuh" target="_blank">Managed by : <strong>Prince Lal</strong></a>
                </div>
            </div>
        </div>
    </div>
</footer>