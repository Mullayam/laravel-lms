@extends('layouts.main')
@push('title')
    <title>Explore</title @endpush @section('main') <div
        class="uk-position-relative uk-visible-toggle overflow-hidden lg:-mt-20" tabindex="-1"
        uk-slideshow="animation: scale ;min-height: 200; max-height: 450 ;autoplay: t rue">

    <ul class="uk-slideshow-items rounded">
        <li>
            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                <img src="{{ asset('cdn/static/assets/images') }}/hero-1.jpg" class="object-cover" alt="" uk-cover>
            </div>
            <div class="container relative md:p-20 md:mt-7 p-5 h-full">
                <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3">
                    <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold"> Learn
                        from the best</h1>
                    <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose
                        from 130,000 online video courses with new additions published every month </p>
                    <a uk-slideshow-parallax="y: 200,0,50" href="#"
                        class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get Started </a>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                <img src="{{ asset('cdn/static/assets/images') }}/hero-2.jpg" class="object-cover" alt="" uk-cover>
            </div>
            <div class="container relative md:p-20 md:mt-7 p-5 h-full">
                <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3">
                    <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold"> Learn
                        from the best</h1>
                    <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose
                        from 130,000 online video courses with new additions published every month </p>
                    <a uk-slideshow-parallax="y: 200,0,0" href="#"
                        class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get Started </a>
                </div>
            </div>
        </li>
    </ul>


    </div>
    <!--  course feature -->
    <div class="container">
        <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
            <h2 class="text-2xl font-semibold"> Featured Classes </h2>
        </div>

        <div class="relative -mt-3" uk-slider="finite: true">

            <div class="uk-slider-container px-1 py-3">
                <ul class="uk-slider-items uk-child-width-1-1@m uk-grid">
                    <li>

                        <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                            <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                                <img src="{{ asset('cdn/static/assets/images') }}/courses/img-6.jpg" alt=""
                                    class="w-full h-full absolute inset-0 object-cover">
                                <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg"
                                    class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                            </div>
                            <div class="flex-1 md:p-6 p-4">
                                <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed">Learn How to Build
                                    Responsive Web Design Essentials HTML5 CSS3 and Bootstrap </div>
                                <div class="mt-2 md:block hidden">
                                    <p class="line-clamp-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                        wisi
                                        enim ad minim veniam</p>
                                </div>
                                <div class="font-semibold mt-3"> John Michael </div>
                                <div class="mt-1 flex items-center justify-between">
                                    <div class="flex space-x-2 items-center text-sm pt-2">
                                        <div> 13 hours </div>
                                        <div>·</div>
                                        <div> 32 lectures </div>
                                    </div>
                                    <div class="text-lg font-semibold"> $14.99 </div>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

            <a class="absolute bg-white uk-position-center-left -ml-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white"
                href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
            <a class="absolute bg-white uk-position-center-right -mr-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white"
                href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

        </div>

        <!--  slider courses -->
        <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
            <h2 class="text-2xl font-semibold"> Popular Classes </h2>
            <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
        </div>

        <div class="mt-3">

            <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden>
                <ion-icon name="star"></ion-icon> Featured today
            </h4>

            <!--  slider -->
            <div class="mt-3">

                <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden>
                    <ion-icon name="star"></ion-icon> Featured today
                </h4>

                <div class="relative" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">

                        <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid">

                            <li>

                                <a href="course-intro.html" class="uk-link-reset">
                                    <div class="card uk-transition-toggle">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="{{ asset('cdn/static/assets/images') }}/courses/img-1.jpg"
                                                alt="" class="">
                                            <span class="icon-play"></span>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="font-semibold line-clamp-2"> Learn JavaScript and Express to become
                                                a
                                                professional JavaScript developer. </div>
                                            <div class="flex space-x-2 items-center text-sm pt-3">
                                                <div> 13 hours </div>
                                                <div> · </div>
                                                <div> 32 lectures </div>
                                            </div>
                                            <div class="pt-1 flex items-center justify-between">
                                                <div class="text-sm font-medium"> John Michael </div>
                                                <div class="text-lg font-semibold"> $14.99 </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </li>


                        </ul>

                        <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                    </div>
                </div>

            </div>

        </div>

        <!--  books  -->
        <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
            <h2 class="text-2xl font-semibold"> Latest Books </h2>
            <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
        </div>

        <div class="relative" uk-slider="finite: true">
            <div class="uk-slider-container px-1 py-3">
                <ul
                    class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@suk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center">
                    <li>
                        <div class="card">
                            <a href="book-description.html">
                                <img src="{{ asset('cdn/static/assets/images') }}/book/book4.jpg" alt=""
                                    class="w-full h-52 object-cover">
                                <div class="p-3 truncate">HTML Breaker</div>
                            </a>
                        </div>
                    </li>

                </ul>

                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                    href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                    href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>
        </div>
    </div>
@endsection
@section('extra_scripts')
    <script>
        @if (Session()->has('emailUpdated'))

            window.addEventListener("load", (event) => {
                UIkit.notification({
                    message: "<div class='flex'> <div class='text-green-600 mr-4'> Your Email Has been verified Successfully! </div></div>",
                    pos: 'top-right'
                })

            });
            Toastify({
                text: "{{ Session->get('emailUpdated') }}",
                duration: 3000,
                style: {
                    fontWeight: 400,
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        @endif
    </script>
@endsection
