@extends('layouts.main')
@section('main')

    <div class="container">

        <div class="md:flex justify-between items-center mb-8">

            <div>
                <div class="text-xl font-semibold"> Showing <I>

                        @if (Auth::check())
                            {{ Auth::user()->selected_course }}
                        @else
                            Choose Course Option
                        @endif
                    </I> Courses </div>
                <div class="text-sm mt-2 font-medium text-gray-500 leading-6"> Choose from courses with new additions
                    published every months </div>
            </div>

            <div class="flex items-center justify-end">


                <a href="#" class="bg-gray-100 border ml-2 px-3 py-2 rounded-md" data-tippy-placement="top" title="Filter"
                    uk-toggle="target: #course-filter;flip: true">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>

            </div>
        </div>

        <!--   Courselist  -->
        <div class="tube-card mt-3 lg:mx-0 -mx-5">

            <h4 class="py-3 px-5 border-b font-semibold text-grey-700">
                <ion-icon name="star"></ion-icon> Featured today
            </h4>

            <div class="divide-y">
                @if ($courses)
                    @foreach ($courses as $course)
                        <div class="flex md:space-x-6 space-x-3 md:p-5 p-2 relative">
                            <a href="{{ route('CourseIntro', ['course_id' => $course->id]) }}"
                                class="md:w-60 md:h-36 w-28 h-20 overflow-hidden rounded-lg relative shadow-sm">
                                <img src="{{ $course->thumbnail }}" alt=""
                                    class="w-full h-full absolute inset-0 object-cover">
                                <img src="{{ asset('cdn/static/assets/images/icon-play.svg') }}"
                                    class="w-12 h-12 uk-position-center" alt="">
                            </a>

                            <div class="card-media-overly"></div>
                            <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-6 left-40">
                                Unactive</div>


                            <div class="flex-1 md:space-y-2 space-y-1">
                                <a href="{{ route('CourseIntro', ['course_id' => $course->id,'contentId'=>$course->content_id]) }}"
                                    class="md:text-xl font-semibold line-clamp-2"> {{ $course->course_name }}</a>
                                <div> {{ $course->short_desc }} </div>
                                <p class="leading-6 pr-4 line-clamp-2 md:block hidden"> </p>
                                <a href="#" class="md:font-semibold block text-sm"> {{ $course->add_by }}</a>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 items-center text-sm">
                                        <div> {{ $course->total_lecture }} Total Lectures </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> {{ $course->course_length }} Hour(s) </div>
                                    </div>
                                    @if ($course->is_free)
                                      <a  class="md:flex bg-yellow-600  text-white-600 items-center justify-center h-9 px-8 rounded-md border -mt-3.5 hidden "><x-mintoast text="Free Course">
                                       Free</x-mintoast></a>
                                    @else
                                    <a href="/course/cart" class="md:flex bg-red-600 items-center justify-center h-9 px-8 rounded-md border -mt-3.5 text-white-600">
                                        <x-mintoast text="Premium Course, Buy First">{{$course->is_free}}</x-mintoast></a>
                                    @endif

                                </div>

                                <div class="absolute top-1 right-3 md:flex hidden">
                                    <a class="hover:bg-gray-200 p-1.5 inline-block rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                                        uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#"
                                                    class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <ion-icon name="share-outline" class="mr-1 text-lg"></ion-icon> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <ion-icon name="star-outline" class="mr-1 text-lg"></ion-icon> Add
                                                    favorites
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <ion-icon name="bookmark-outline" class="mr-1 text-lg"></ion-icon> Add
                                                    Bookmark
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center px-3 py-2 text-sm text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                    <ion-icon name="heart-outline" class="mr-1 text-lg"></ion-icon> Wishlist
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="flex-1 md:space-y-2 space-y-1">
                        <p  class="md:text-xl font-semibold line-clamp-2">No Courses Found </p>

                    </div>
                @endif
            </div>

        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-9 space-x-2 text-base font-semibold text-gray-400 items-center">
          {{$courses->links()}}
        </div>


    </div>


@endsection
