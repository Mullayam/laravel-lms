@extends('layouts.admin')

@section('admin_content')

    <div class="container">
        <div class="md:space-y-8 space-y-4">

            <div class="md:-mb-3 space-y-2">
                <h6 class="font-medium"> Welcome John</h6>
                <h1 class="font-semibold md:text-2xl text-lg"> Dashboard</h1>
            </div>

            <div class="relative" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul
                        class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid">

                        <li>
                            <div class="bg-white shadow rounded-md">
                                <div class="flex sm:p-5 p-4">
                                    <div class="flex-1 min-w-0">
                                        <div> Your Balance</div>
                                        <div class="font-semibold md:text-2xl text-xl mt-3">
                                            $642.00
                                        </div>
                                        <div
                                            class="md:inline-flex items-baseline text-red-500 text-sm hidden font-semibold mt-1">
                                            <i class="icon-feather-arrow-up"></i> 4.4%
                                        </div>
                                    </div>
                                    <ion-icon name="people"
                                        class="text-4xl text-white bg-gradient-to-bl to-yellow-400 from-red-300 p-1 rounded-lg text-opacity-90 ">
                                    </ion-icon>
                                </div>
                                <a href="#"
                                    class="text-sm space-x-1 bg-gray-50 flex font-medium items-center justify-center py-2.5 rounded-b-md space-x-0 text-gray-600 w-full border-t border-gray-100">
                                    <span> View Invoice</span>
                                    <ion-icon name="chevron-forward-outline" role="img" class="md hydrated"
                                        aria-label="chevron forward outline"></ion-icon>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="bg-white shadow rounded-md">
                                <div class="flex sm:p-5 p-4">
                                    <div class="flex-1 min-w-0">
                                        <div> Active Courses</div>
                                        <div class="font-semibold md:text-2xl text-xl mt-3">
                                            {{$totalCourses}}
                                        </div>
                                        <div class="md:font-medium mt-1 text-blue-400 text-sm"> 32+ This mounth
                                        </div>
                                    </div>
                                    <ion-icon name="book"
                                        class="text-4xl text-white bg-gradient-to-bl to-blue-400 from-blue-300 p-1 rounded-lg text-opacity-90 ">
                                    </ion-icon>
                                </div>
                                <a href="#"
                                    class="text-sm space-x-1 bg-gray-50 flex font-medium items-center justify-center py-2.5 rounded-b-md space-x-0 text-gray-600 w-full border-t border-gray-100">
                                    <span> View Courses</span>
                                    <ion-icon name="chevron-forward-outline" role="img" class="md hydrated"
                                        aria-label="chevron forward outline"></ion-icon>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="bg-white shadow rounded-md">
                                <div class="flex sm:p-5 p-4">
                                    <div class="flex-1 min-w-0">
                                        <div> Site Members</div>
                                        <div class="font-semibold md:text-2xl text-xl mt-3">
                                            {{$totalUsers}}
                                        </div>
                                        <div class="md:font-medium text-green-400 text-sm mt-1"> 260+ New
                                            Registered </div>
                                    </div>
                                    <ion-icon name="people"
                                        class="text-4xl text-white bg-gradient-to-bl to-green-400 from-green-300 p-1 rounded-lg text-opacity-90 ">
                                    </ion-icon>
                                </div>
                                <a href="/admin/students"
                                    class="text-sm space-x-1 bg-gray-50 flex font-medium items-center justify-center py-2.5 rounded-b-md space-x-0 text-gray-600 w-full border-t border-gray-100">
                                    <span> View Users</span>
                                    <ion-icon name="chevron-forward-outline" role="img" class="md hydrated"
                                        aria-label="chevron forward outline"></ion-icon>
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


            <!--Earnings  -->
            <div>

                <div class="md:text-2xl text-xl font-semibold mb-5">Earnings</div>

                <!-- Dashboard Box -->
                <div class="shadow bg-white rounded-md md:block hidden">
                    <div class="border-b flex items-center justify-between px-5 py-2.5">
                        <div class="flex space-x-2 bg-gray-100 rounded-md p-0.5 text-xs">
                            <a href="#" class="flex items-center justify-center h-7 px-4 rounded-md bg-white shadow">
                                Daily </a>
                            <a href="#" class="flex items-center justify-center h-7 px-4 rounded-md">
                                Monthly </a>
                            <a href="#" class="flex items-center justify-center h-7 px-4 rounded-md">
                                Yearly</a>
                        </div>
                        <div class="w-44">
                            <select class="selectpicker hide-tick is-small">
                                <option>Last 6 Months</option>
                                <option>This Year</option>
                                <option>This Month</option>
                            </select>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart" width="100" height="45"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Box / End -->
            </div>

            <div class="lg:flex lg:space-x-4">

                <!-- Latest enroll -->
                <div class="shadow bg-white rounded-md self-start lg:w-8/12">

                    <div class="border-b flex items-center justify-between md:p-5 p-3">
                        <div>
                            <h2 class="text-lg font-semibold"> Latest Enrolls </h2>
                        </div>
                        <a href="/admin/enrolled" class="text-blue-500"> See all </a>
                    </div>

                    <div class="lg:max-h-96" data-simplebar>

                        <ul class="divide-y px-5">

                            <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">

                                <a href="#">
                                    <div class=" h-12 md:h-16 md:w-24 overflow-hidden relative rounded w-12">
                                        <img src="../assets/images/courses/img-1.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="flex-1 flex justify-between">
                                    <div class="flex-1">
                                        <a href="#" class="md:text-base font-semibold line-clamp-1"> The
                                            Complete JavaScript For Beginners </a>
                                        <div class="flex space-x-3 items-center text-sm md:mt-1.5 text-gray-500">
                                            <span class="font-semibold text-sm text-blue-500">JavaScript</span>
                                            <div class="md:block hidden">·</div>
                                            <span class="font-medium text-sm"> Total Enrolled 212</span>
                                        </div>
                                    </div>
                                    <div class="mb-0 sm:block hidden">
                                        <div
                                            class="bg-green-100 text-green-600 font-semibold inline-block mt-3 px-3 py-0.5 rounded-full text-base">
                                            $49.<small>00</small> +</div>
                                    </div>
                                </div>

                            </li>

                            <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
                                <a href="#">
                                    <div class=" h-12 md:h-16 md:w-24 overflow-hidden relative rounded w-12">
                                        <img src="../assets/images/courses/img-2.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="flex-1 flex justify-between">

                                    <div class="flex-1">
                                        <a href="#" class="md:text-base font-semibold line-clamp-1">
                                            Learn and Understand AngularJS to become a professional
                                            developer</a>

                                        <div class="flex space-x-3 items-center text-sm md:mt-1.5 text-gray-500">
                                            <span class="font-semibold text-sm text-green-500">Angular</span>
                                            <div class="md:block hidden">·</div>
                                            <span class="font-medium text-sm"> Total Enrolled 192</span>
                                        </div>

                                    </div>
                                    <div class="mb-0 sm:block hidden">
                                        <div
                                            class="bg-green-100 text-green-600 font-semibold inline-block mt-3 px-3 py-0.5 rounded-full text-base">
                                            $24.<small>00</small> +</div>
                                    </div>

                                </div>

                            </li>

                            <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
                                <a href="#">
                                    <div class=" h-12 md:h-16 md:w-24 overflow-hidden relative rounded w-12">
                                        <img src="../assets/images/courses/img-3.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="flex-1 flex justify-between">

                                    <div class="flex-1">
                                        <a href="#" class="md:text-base font-semibold line-clamp-1">
                                            Build Responsive Real World Websites</a>

                                        <div class="flex space-x-3 items-center text-sm md:mt-1.5 text-gray-500">
                                            <span class="font-semibold text-sm text-yellow-500">Web
                                                Design</span>
                                            <div class="md:block hidden">·</div>
                                            <span class="font-medium text-sm"> Total Enrolled 320</span>
                                        </div>

                                    </div>
                                    <div class="mb-0 sm:block hidden">
                                        <div
                                            class="bg-green-100 text-green-600 font-semibold inline-block mt-3 px-3 py-0.5 rounded-full text-base">
                                            $34.<small>00</small> +</div>
                                    </div>

                                </div>

                            </li>

                            <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">

                                <a href="#">
                                    <div class=" h-12 md:h-16 md:w-24 overflow-hidden relative rounded w-12">
                                        <img src="../assets/images/courses/img-4.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="flex-1 flex justify-between">
                                    <div class="flex-1">
                                        <a href="#" class="md:text-base font-semibold line-clamp-1">
                                            Learn Angular Fundamentals to Expert </a>
                                        <div class="flex space-x-3 items-center text-sm md:mt-1.5 text-gray-500">
                                            <span class="font-semibold text-sm text-blue-500">Angular</span>
                                            <div class="md:block hidden">·</div>
                                            <span class="font-medium text-sm"> Total Enrolled 212</span>
                                        </div>
                                    </div>
                                    <div class="mb-0 sm:block hidden">
                                        <div
                                            class="bg-green-100 text-green-600 font-semibold inline-block mt-3 px-3 py-0.5 rounded-full text-base">
                                            $49.<small>00</small> +</div>
                                    </div>
                                </div>

                            </li>

                            <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
                                <a href="#">
                                    <div class=" h-12 md:h-16 md:w-24 overflow-hidden relative rounded w-12">
                                        <img src="../assets/images/courses/img-5.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="flex-1 flex justify-between">

                                    <div class="flex-1">
                                        <a href="#" class="md:text-base font-semibold line-clamp-1">
                                            Learn C sharp for Beginners Crash Course</a>

                                        <div class="flex space-x-3 items-center text-sm md:mt-1.5 text-gray-500">
                                            <span class="font-semibold text-sm text-green-500">C#</span>
                                            <div class="md:block hidden">·</div>
                                            <span class="font-medium text-sm"> Total Enrolled 192</span>
                                        </div>

                                    </div>
                                    <div class="mb-0 sm:block hidden">
                                        <div
                                            class="bg-green-100 text-green-600 font-semibold inline-block mt-3 px-3 py-0.5 rounded-full text-base">
                                            $24.<small>00</small> +</div>
                                    </div>

                                </div>

                            </li>

                            <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
                                <a href="#">
                                    <div class=" h-12 md:h-16 md:w-24 overflow-hidden relative rounded w-12">
                                        <img src="../assets/images/courses/img-6.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="flex-1 flex justify-between">

                                    <div class="flex-1">
                                        <a href="#" class="md:text-base font-semibold line-clamp-1">Responsive Web
                                            Design Essentials Training</a>

                                        <div class="flex space-x-3 items-center text-sm md:mt-1.5 text-gray-500">
                                            <span class="font-semibold text-sm text-yellow-500">HTML</span>
                                            <div class="md:block hidden">·</div>
                                            <span class="font-medium text-sm"> Total Enrolled 320</span>
                                        </div>

                                    </div>
                                    <div class="mb-0 sm:block hidden">
                                        <div
                                            class="bg-green-100 text-green-600 font-semibold inline-block mt-3 px-3 py-0.5 rounded-full text-base">
                                            $34.<small>00</small> +</div>
                                    </div>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--Top Courses-->
                <div class="shadow bg-white rounded-md self-start lg:w-4/12 mt-5 lg:mt-0">

                    <div
                        class="bg-yellow-50 border-b border-yellow-100 flex items-center justify-center px-6 py-4 rounded-t-md">
                        <ion-icon name="trophy" class="text-lg text-yellow-600 mr-2"></ion-icon>
                        <h2 class="font-semibold text-base text-center text-yellow-700"> Top Courses </h2>
                    </div>

                    <ul class="divide-y px-5">

                        <div class="flex py-3.5 space-x-4">
                            <div
                                class="bg-yellow-100 border border-yellow-300 font-semibold px-2 py-1.5 rounded self-start text-yellow-600">
                                1 <span class="-ml-0.5 font-medium text-xs">st</span> </div>
                            <div class="flex-1">
                                <a href="#" class="capitalize font-medium line-clamp-2">Build Responsive
                                    Real World Websites</a>
                                <div class="text-sm md:mt-1.5 text-gray-500">Enrolled 212</div>
                            </div>
                        </div>                      

                    </ul>

                </div>

            </div>

            <div class="md:flex md:space-x-4">

                <!-- last 5 payemnts -->
                <div class="shadow bg-white rounded-md self-start md:w-6/12">

                    <div class="flex items-center justify-between border-b py-4 px-6">
                        <div class="flex items-center">
                            <ion-icon name="people" class="bg-blue-100 p-1 mr-2 rounded text-blue-500">
                            </ion-icon>
                            <h2 class="text-base font-semibold"> Last 5 Transactions </h2>
                        </div>
                        <a href="/admin/transactions" class="text-blue-500"> See all </a>
                    </div>

                   
                    <div class="md:max-h-96" data-simplebar>

                        <!-- single Instructor  -->
                        <div class="flex items-center space-x-4 rounded-md px-5 py-3 hover:bg-gray-50">
                            <a href="#" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                <img src="../assets/images/avatars/avatar-1.jpg" class="absolute w-full h-full inset-0 "
                                    alt="">
                            </a>
                            <div class="flex-1">
                                <a href="#" class="text-base font-semibold capitalize"> Stella Johnson
                                </a>
                                <div class="flex space-x-2 items-center text-sm md:mt-1.5 text-gray-500">
                                    <span class="font-medium text-sm"> Courses 34 </span>
                                    <div class="md:block hidden">·</div>
                                    <span class="font-medium text-sm"> Students 23,112 </span>
                                </div>
                            </div>
                            <a href="#"
                                class="lg:flex items-center justify-center h-8 px-3 rounded-md text-sm border to-transparent font-semibold hidden">
                                View Profile
                            </a>
                        </div>
 

                    </div>

                    <a href="#" class="block border-t font-semibold py-3 mt-2 text-blue-600 text-center"> See all
                    </a>

                </div>

                <!-- Latest Reviews-->
                <div class="shadow bg-white rounded-md self-start md:w-6/12 mt-5 md:mt-0">

                    <div class="flex items-center justify-between border-b py-4 px-6">
                        <div class="flex items-center">
                            <ion-icon name="star" class="bg-yellow-100 p-1 mr-2 rounded text-yellow-500">
                            </ion-icon>
                            <h2 class="text-base font-semibold"> Latest Reviews </h2>
                        </div>
                        <a href="/admin/course/reviews/course_id/course_name" class="text-blue-500"> See all </a>
                    </div>
                    <div class="md:max-h-96" data-simplebar>

                        <!-- list reviews -->
                        <div class="divide-y px-5">

                            <!--  single review -->
                            <div class="flex gap-x-4 py-4 relative">
                                <img src="../assets/images/avatars/avatar-5.jpg" alt=""
                                    class="rounded-full shadow w-12 h-12">
                                <div
                                    class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-200"></ion-icon>
                                </div>
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Jesse Stevens</h4>
                                    <span class="text-gray-700 text-sm"> Instructor </span>
                                    <p class="mt-2 md:ml-0 -ml-16 text-sm leading-6">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut
                                        laoreet dolore magna aliquam erat volutpat..
                                        <a href="#" class="text-blue-500 ml-2">Read more</a>
                                    </p>
                                </div>
                            </div>

                           

                        </div>

                    </div>

                    <div class="relative">
                        <div class="-top-16 absolute bg-gradient-to-t from-white h-16 to-transparent w-full">
                        </div>
                        <a href="" class="block font-semibold mt-2 pb-6 text-blue-600 text-center"> See
                            all </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
