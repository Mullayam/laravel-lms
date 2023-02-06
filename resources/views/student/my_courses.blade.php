@extends('layouts.student')
@section('student')
            <div class="container">

                <div class="border-b items-end justify-between mb-6 md:mb-10 sm:flex">
                    <div class="flex-1 md:mb-0 mb-3">
                        <div class="text-2xl font-semibold md:mb-3"> Courses </div>
                        <nav class="cd-secondary-nav md:m-0 nav-small">
                            <ul>
                                <li class="active"><a href="#" class="lg:px-2"> Progress </a></li>
                                <li><a href="#" class="lg:px-2"> Completed </a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="flex items-center mb-4 space-x-3">
                        <div class="bg-gray-100 border inline-flex p-0.5 rounded-md text-lg fliter-tab" uk-switcher="connect: #course-tabs; animation: uk-animation-fade">
                            {{-- <a href="#" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="Grid view">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            </a> --}}
                            <a href="#" class="py-1.5 px-2.5 rounded-md " data-tippy-placement="top" title="List view">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            </a>
                            {{-- <a href="#" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="Grid view">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            </a> --}}
                        </div>
                        <div class="bg-white border flex items-center overflow-hidden relative rounded-lg">
                            <i class="pl-4 -mr-2 relative uil-search"></i>
                            <input class="flex-1 max-h-9" placeholder="Search" type="text">
                        </div>
                    </div>
                </div>

                <div class="uk-switcher" id="course-tabs">

                    {{-- <!-- layout 1 -->
                    <div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- items 1 -->
                            <div class="bg-white shadow rounded-md">

                                <div class="flex relative">
                                    <a href="#" class="md:w-36 overflow-hidden relative rounded-l-lg shadow-sm w-28">
                                        <img src="../assets/images/courses/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                    </a>
                                    <div class="flex-1 p-5">
                                        <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-base">    Learn C sharp for Beginners Crash Course  </a>
                                        <a href="#" class="block md:font-medium"> Stella Johnson </a>
                                        <div class="flex items-center justify-between pt-2 space-x-4">
                                            <!-- progress -->
                                            <div class="flex-1 relative">
                                                <div class="mb-2 text-gray-400 text-sm"> 8/12
                                                    <span class="ml-1">  Complete </span>
                                                </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-3/4 bg-blue-600"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- items 2 -->
                            <div class="bg-white shadow rounded-md">

                                <div class="flex relative">
                                    <a href="#" class="md:w-36 overflow-hidden relative rounded-l-lg shadow-sm w-28">
                                        <img src="../assets/images/courses/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                    </a>
                                    <div class="flex-1 p-5">
                                        <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-base"> Learn and Understand AngularJS to become a professional  developer </a>
                                        <a href="#" class="block md:font-medium"> Martin Gray </a>
                                        <div class="flex items-center justify-between pt-2 space-x-4">
                                            <!-- progress -->
                                            <div class="flex-1 relative">
                                                <div class="mb-2 text-gray-400 text-sm"> 4/8
                                                    <span class="ml-1">  Complete </span>
                                                </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-1/2 bg-blue-600"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- items 3 -->
                            <div class="bg-white shadow rounded-md">

                                <div class="flex relative">
                                    <a href="#" class="md:w-36 overflow-hidden relative rounded-l-lg shadow-sm w-28">
                                        <img src="../assets/images/courses/img-6.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                    </a>
                                    <div class="flex-1 p-5">
                                        <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-base">Build Responsive Real World Websites</a>
                                        <a href="#" class="block md:font-medium"> Jesse Stevens </a>
                                        <div class="flex items-center justify-between pt-2 space-x-4">
                                            <!-- progress -->
                                            <div class="flex-1 relative">
                                                <div class="mb-2 text-gray-400 text-sm"> 16/16
                                                    <span class="ml-1">  Complete </span>
                                                </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-full bg-green-500"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- items 4 -->
                            <div class="bg-white shadow rounded-md">

                                <div class="flex relative">
                                    <a href="#" class="md:w-36 overflow-hidden relative rounded-l-lg shadow-sm w-28">
                                        <img src="../assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                    </a>
                                    <div class="flex-1 p-5">
                                        <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-base"> Ultimate Web Developer Course </a>
                                        <a href="#" class="block md:font-medium"> Jesse Stevens </a>
                                        <div class="flex items-center justify-between pt-2 space-x-4">
                                            <!-- progress -->
                                            <div class="flex-1 relative">
                                                <div class="mb-2 text-gray-400 text-sm"> 12/15
                                                    <span class="ml-1">  Complete </span>
                                                </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-5/6 bg-blue-600"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- items 5 -->
                            <div class="bg-white shadow rounded-md">

                                <div class="flex relative">
                                    <a href="#" class="md:w-36 overflow-hidden relative rounded-l-lg shadow-sm w-28">
                                        <img src="../assets/images/courses/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                    </a>
                                    <div class="flex-1 p-5">
                                        <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-base">Learn Angular Fundamentals to Expert  developer </a>
                                        <a href="#" class="block md:font-medium"> Martin Gray </a>
                                        <div class="flex items-center justify-between pt-2 space-x-4">
                                            <!-- progress -->
                                            <div class="flex-1 relative">
                                                <div class="mb-2 text-gray-400 text-sm"> 2/8
                                                    <span class="ml-1">  Complete </span>
                                                </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-1/4 bg-blue-600"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- items 6 -->
                            <div class="bg-white shadow rounded-md">

                                <div class="flex relative">
                                    <a href="#" class="md:w-36 overflow-hidden relative rounded-l-lg shadow-sm w-28">
                                        <img src="../assets/images/courses/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                    </a>
                                    <div class="flex-1 p-5">
                                        <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-base">    Learn C sharp for Beginners Crash Course  </a>
                                        <a href="#" class="block md:font-medium"> Stella Johnson </a>
                                        <div class="flex items-center justify-between pt-2 space-x-4">
                                            <!-- progress -->
                                            <div class="flex-1 relative">
                                                <div class="mb-2 text-gray-400 text-sm"> 1/12
                                                    <span class="ml-1">  Complete </span>
                                                </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-3/4 bg-blue-600"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Pagination -->
                        <div class="flex justify-center mt-9 space-x-2 text-base font-semibold text-gray-400 items-center">
                            <a href="#" class="py-1 px-3 bg-gray-200 rounded text-gray-600"> 1</a>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 2</a>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 3</a>
                            <ion-icon name="ellipsis-horizontal" class="text-lg -mb-4 md hydrated" role="img" aria-label="ellipsis horizontal"></ion-icon>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 12</a>
                        </div>

                    </div> --}}

                    <!-- layout 2 -->
                    <div>

                        <div class="grid md:grid-cols-3 gap-6">

                           @forelse ($courses as $course)
                                 <div class="bg-white overflow-hidden rounded-md shadow">
                                <a href="#">
                                    <div class="h-28 md:h-36 overflow-hidden relative w-full">
                                        <img src="{{$course->enrolledCourse->thumbnail}}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <a href="{{route('CoursePlaylist',['course_id'=>$course->enrolledCourse->id])}}" class="font-semibold line-clamp-2"> {{$course->enrolledCourse->course_name}} </a>
                                    <div class="flex space-x-2 items-center text-sm pt-3">
                                        <div> {{$course->enrolledCourse->course_length}} hours  </div>
                                        <div> · </div>
                                        <div> {{$course->enrolledCourse->total_lecture}} lectures </div>
                                    </div>
                                    <div class="bg-gray-50 mt-2.5 p-4 pt-2.5 -m-5 font-medium">
                                        <div class="mb-2 text-gray-400 text-sm"> 8/12
                                            <span class="ml-1">  Complete </span>
                                        </div>
                                        <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-3/4 bg-blue-600"></div></div>
                                    </div>
                                </div>
                            </div>
                           @empty
                                No Courses is Enrolled By You
                           @endforelse



                        </div>

                        <!-- Pagination -->
                        <div class="flex justify-center mt-9 space-x-2 text-base font-semibold text-gray-400 items-center">
                            {{-- <a href="#" class="py-1 px-3 bg-gray-200 rounded text-gray-600"> 1</a>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 2</a>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 3</a>
                            <ion-icon name="ellipsis-horizontal" class="text-lg -mb-4 md hydrated" role="img" aria-label="ellipsis horizontal"></ion-icon>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 12</a> --}}
                            {{$courses->links()}}
                        </div>

                    </div>

                    {{-- <!-- layout 3 -->
                    <div>

                        <div class="space-y-5">

                            <!-- items 1 -->
                            <div class="bg-white shadow rounded-md md:flex md:space-x-6 md:p-5 p-2">

                                <a href="#" class="block h-32 md:h-28 md:w-48 overflow-hidden relative rounded-lg shadow-sm w-full">
                                    <img src="../assets/images/courses/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="flex-1 md:mt-0 mt-4">
                                    <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-lg">    Learn C sharp for Beginners Crash Course  </a>
                                    <div class="flex space-x-2 items-center">
                                        <a href="#" class="block md:font-semibold"> Stella Johnson </a>
                                        <div class="md:block hidden">·</div>
                                        <div> Binginner level  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 18 Hourse </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-3 sm:space-x-8 space-x-2">
                                        <!-- progress -->
                                        <div class="flex-1 relative">
                                            <div class="mb-3 text-gray-400"> 1/12   <span class="ml-1">  Complete </span>  </div>
                                            <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-3/4 bg-blue-600"></div></div>
                                        </div>
                                        <a href="#" class="bg-gray-100 border inline-block px-8 py-2 rounded-md"> Resume </a>
                                    </div>

                                </div>

                            </div>

                            <!-- items 2 -->
                            <div class="bg-white shadow rounded-md md:flex md:space-x-6 md:p-5 p-2">

                                <a href="#" class="block h-32 md:h-28 md:w-48 overflow-hidden relative rounded-lg shadow-sm w-full">
                                    <img src="../assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="flex-1 md:mt-0 mt-4">
                                    <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-lg"> The Complete JavaScript For Beginners </a>
                                    <div class="flex space-x-2 items-center">
                                        <a href="#" class="block md:font-semibold"> John Michael </a>
                                        <div class="md:block hidden">·</div>
                                        <div> Advance level  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 21 Hourse </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-3 sm:space-x-8 space-x-2">
                                        <!-- progress -->
                                        <div class="flex-1 relative">
                                            <div class="mb-3 text-gray-400"> 6/9   <span class="ml-1">  Complete </span>  </div>
                                            <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-4/5 bg-blue-600"></div></div>
                                        </div>
                                        <a href="#" class="bg-gray-100 border inline-block px-8 py-2 rounded-md"> Resume </a>
                                    </div>

                                </div>

                            </div>

                            <!-- items 3 -->
                            <div class="bg-white shadow rounded-md md:flex md:space-x-6 md:p-5 p-2">

                                <a href="course-intro-3.html" class="block h-32 md:h-28 md:w-48 overflow-hidden relative rounded-lg shadow-sm w-full">
                                    <img src="../assets/images/courses/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="flex-1 md:mt-0 mt-4">
                                    <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-lg"> Build Responsive Real World Websites </a>
                                    <div class="flex space-x-2 items-center">
                                        <a href="#" class="block md:font-semibold"> Monroe Parker </a>
                                        <div class="md:block hidden">·</div>
                                        <div> Binginner levels  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 16 Hourse </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-3 sm:space-x-8 space-x-2">
                                        <!-- progress -->
                                        <div class="flex-1 relative">
                                            <div class="mb-3 text-gray-400"> 12/12   <span class="ml-1">  Complete </span>  </div>
                                            <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-full bg-green-500"></div></div>
                                        </div>
                                        <a href="#" class="bg-gray-100 border inline-block px-8 py-2 rounded-md"> Resume </a>
                                    </div>

                                </div>

                            </div>

                            <!-- items 4 -->
                            <div class="bg-white shadow rounded-md md:flex md:space-x-6 md:p-5 p-2">

                                <a href="#" class="block h-32 md:h-28 md:w-48 overflow-hidden relative rounded-lg shadow-sm w-full">
                                    <img src="../assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="flex-1 md:mt-0 mt-4">
                                    <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-lg"> Ultimate Web Developer Course </a>
                                    <div class="flex space-x-2 items-center">
                                        <a href="#" class="block md:font-semibold"> Jesse Stevens </a>
                                        <div class="md:block hidden">·</div>
                                        <div> Intermediate level  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 13 Hourse </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-3 sm:space-x-8 space-x-2">
                                        <!-- progress -->
                                        <div class="flex-1 relative">
                                            <div class="mb-3 text-gray-400"> 5/9   <span class="ml-1">  Complete </span>  </div>
                                            <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-1/2 bg-blue-600"></div></div>
                                        </div>
                                        <a href="#" class="bg-gray-100 border inline-block px-8 py-2 rounded-md"> Resume </a>
                                    </div>

                                </div>

                            </div>

                            <!-- items 5 -->
                            <div class="bg-white shadow rounded-md md:flex md:space-x-6 md:p-5 p-2">

                                <a href="#" class="block h-32 md:h-28 md:w-48 overflow-hidden relative rounded-lg shadow-sm w-full">
                                    <img src="../assets/images/courses/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="flex-1 md:mt-0 mt-4">
                                    <a href="#" class="font-semibold line-clamp-2 mb-2.5 md:text-lg">    Learn C sharp for Beginners Crash Course  </a>
                                    <div class="flex space-x-2 items-center">
                                        <a href="#" class="block md:font-semibold"> Stella Johnson </a>
                                        <div class="md:block hidden">·</div>
                                        <div> Binginner level  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 18 Hourse </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-3 sm:space-x-8 space-x-2">
                                        <!-- progress -->
                                        <div class="flex-1 relative">
                                            <div class="mb-3 text-gray-400"> 1/12   <span class="ml-1">  Complete </span>  </div>
                                            <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1.5"> <div class="h-full w-3/4 bg-blue-600"></div></div>
                                        </div>
                                        <a href="#" class="bg-gray-100 border inline-block px-8 py-2 rounded-md"> Resume </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Pagination -->
                        <div class="flex justify-center mt-9 space-x-2 text-base font-semibold text-gray-400 items-center">
                            <a href="#" class="py-1 px-3 bg-gray-200 rounded text-gray-600"> 1</a>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 2</a>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 3</a>
                            <ion-icon name="ellipsis-horizontal" class="text-lg -mb-4 md hydrated" role="img" aria-label="ellipsis horizontal"></ion-icon>
                            <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 12</a>
                        </div>

                    </div> --}}

                </div>

            </div>
@endsection
