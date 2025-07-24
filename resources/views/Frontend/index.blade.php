@extends('layouts.app')

@section('title', 'Sagar Construction Group')

@section('content')
<!--HTML CODE-->
<div class="w-full relative  lg:h-[80vh]">
    <div class="swiper default-carousel swiper-container h-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="flex justify-center items-start h-full">
                    <img src="{{ asset('images/banner_1_SCG.jpg') }}" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex justify-center items-start h-full">
                    <!-- <span class="text-3xl font-semibold text-indigo-600">Slide 2 </span> -->
                    <img src="{{ asset('images/banner_4_SCG.jpg') }}" alt="">
                </div>
                <!-- <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <img src="{{ asset('images/banner_1_SCG.jpg') }}" alt="">
                </div> -->
            </div>
            <div class="swiper-slide">
                <div class="flex justify-center items-star h-full">
                    <img src="{{ asset('images/banner_5_SCG.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="flex items-center gap-8 lg:justify-start justify-center">
            <button id="slider-button-left"
                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8 !left-5 hover:bg-indigo-600 "
                data-carousel-prev>
                
            </button>
            <button id="slider-button-right"
                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8  !right-5 hover:bg-indigo-600"
                data-carousel-next>
                
            </button>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Hero section -->
 <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">

    <!-- Image Column -->
    <div class="w-full h-64 lg:w-1/2 lg:h-auto">
        <!-- <img class="h-full w-full object-cover" src="https://picsum.photos/id/1018/2000" alt="Winding mountain road"> -->
        <img class="h-127" src="{{ asset('images/hero_section/ROBERTGSNJ_2.jpg') }}"" alt="Winding mountain road">
    </div>
    <!-- Close Image Column -->

    <!-- Text Column -->
    <div
        class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
        <!-- Text Wrapper -->
        <div class="flex flex-col p-12 md:px-16">
            <h2 class="text-2xl font-medium uppercase heroSectionText lg:text-4xl">What Sagar Construction Is?</h2>
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>
            <!-- Button Container -->
            <div class="mt-8">
                <a href="#"
                    class="inline-block w-full text-center text-xl rounded-full font-medium text-gray-100 bg-[#003347] border-solid border-2 border-gray-600 py-2 px-10 hover:text-[#ff7b02] hover:shadow-md md:w-48">Read
                    More</a>
            </div>
        </div>
        <!-- Close Text Wrapper -->
    </div>
    <!-- Close Text Column -->

</div>

@endsection