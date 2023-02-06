@extends('layouts.student')
@section('student')
    <div class="container">

        <div class="md:space-y-8 space-y-4">

            <div class="grid gap-3 md:grid-cols-4 grid-cols-2 mt-2">

                <div class="bg-white p-5 shadow space-y-4 rounded-md">
                    <div class="flex items-start justify-between">
                        <ion-icon name="flag" class="text-2xl text-white bg-blue-500 rounded-full p-1.5" role="img"
                            aria-label="flag"></ion-icon>
                        <div class="text-3xl font-bold"> {{ $courses->count() }} </div>
                    </div>
                    <div> In Progress</div>
                </div>
                <div class="bg-white p-5 shadow space-y-4 rounded-md">
                    <div class="flex items-start justify-between">
                        <ion-icon name="heart" class="text-2xl text-white bg-red-500 rounded-full p-1.5" role="img"
                            aria-label="heart"></ion-icon>
                        <div class="text-3xl font-bold"> 0 </div>
                    </div>
                    <div> Wishlist </div>
                </div>
                <div class="bg-white p-5 shadow space-y-4 rounded-md">
                    <div class="flex items-start justify-between">
                        <ion-icon name="medal" class="text-2xl text-white bg-yellow-500 rounded-full p-1.5" role="img"
                            aria-label="medal"></ion-icon>
                        <div class="text-3xl font-bold">0 </div>
                    </div>
                    <div> Cart</div>
                </div>
                <div class="bg-white p-5 shadow space-y-4 rounded-md">
                    <div class="flex items-start justify-between">
                        <ion-icon name="cart" class="text-2xl text-white bg-green-500 rounded-full p-1.5" role="img"
                            aria-label="cart"></ion-icon>
                        <div class="text-3xl font-bold"> 0 </div>
                    </div>
                    <div> Purchased</div>
                </div>

            </div>

            <div class="lg:flex lg:space-x-4">

                <!-- Resume courses -->
                <div class="shadow bg-white rounded-md lg:w-full">

                    <div class="border-b flex items-center justify-between md:p-5 p-3">
                        <div>
                            <h2 class="text-lg font-semibold"> Courses in progess </h2>
                        </div>
                        <a href="{{ route('studentCourses', ['username' => Session::get('uname')]) }}" class="text-blue-500">
                            See all </a>
                    </div>

                    <div class="lg:max-h-96" data-simplebar>

                        <ul class="divide-y px-5">
                            @foreach ($courses as $course)
                                <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
                                    <a href="">
                                        <div class="h-12 md:h-16 md:w-24 overflow-hidden relative rounded -md w-12">
                                            <img src="{{$course->enrolledCourse->thumbnail}}" alt=""
                                                class="w-full h-full absolute inset-0 object-cover">
                                        </div>
                                    </a>

                                    <div class="flex flex-1 items-end justify-between space-x-5">
                                        <div class="flex-1">
                                            <a href=" {{route('CourseIntro',['course_id'=>$course->enrolledCourse->id] )}}"
                                                class="md:text-base font-semibold line-clamp-1">{{$course->enrolledCourse->course_name}} </a>
                                            <div class="mt-1.5">
                                                <div class="mb-1.5 text-gray-400 text-sm"> 8/16 <span class="ml-1">
                                                        Complete </span> </div>
                                                <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1">
                                                    <div class="h-full w-1/2 bg-blue-600"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{route('CoursePlaylist',['course_id'=>$course->enrolledCourse->id])}}"
                                            class="sm:flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold hidden">
                                            Resume
                                        </a>
                                    </div>

                                </li>
                            @endforeach

                        </ul>

                    </div>

                </div>



            </div>


        </div>

    </div>
@endsection
