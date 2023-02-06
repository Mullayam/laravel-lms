@extends('layouts.main')
@section('extra_styles')
    <style>
        @media(min-width: 1028px) {
            .relative {
                margin-top: 0 !important;
            }
        }
    </style>
@endsection
@section('main')
    <div class="bg-gradient-to-tr from-pink-500 to-red-500 text-white">
        <div class="container p-0">
            <div class="lg:flex items-center lg:space-x-12 lg:py-10 p-4">

                <div class="lg:w-4/12">
                    <div class="w-full h-44 overflow-hidden rounded-lg relative lg:mb-0 mb-4">
                        <img src="{{ $coursePlaylist->thumbnail }}" alt="{{ $coursePlaylist->course_name }}"
                            class="w-full h-full absolute inset-0 object-cover">

                    </div>
                </div>
                <div class="lg:w-8/12">

                    <h1 class="lg:leading-10 lg:text-2xl text-white text-xl leading-8 font-semibold">
                        {{ $coursePlaylist->course_name }}</h1>
                    <p class="line-clamp-2 mt-3 md:block hidden">{{ $coursePlaylist->details->short_desc }} </p>

                    <ul class="flex text-gray-100 gap-4 mt-4 mb-1">
                        <li class="flex items-center">
                            <span class="avg bg-yellow-500 mr-2 px-2 rounded text-white font-semiold">5.0</span>
                            <div class="star-rating text-yellow-200">

                            </div>
                        </li>
                        <li class="opacity-90">
                            <ion-icon name="people-circle-outline"></ion-icon>Enrolled
                        </li>
                    </ul>
                    <ul class="lg:flex items-center text-gray-100 mt-3 opacity-90">
                        <li> Created by <a href="#" class="text-white fond-bold hover:underline hover:text-white">
                                {{ $coursePlaylist->add_by }} </a> </li>
                        <li> <span class="lg:block hidden mx-3 text-2xl">|</span> </li>
                        <li> Last updated {{ $coursePlaylist->created_at }}</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
    <div class="container p-0">

        <div class="space-y-5 lg:w-9/12 mx-auto mt-2">

            <!-- course Curriculum -->
            <div id="Playlist">

                <h3 class="mb-4 text-xl font-semibold lg:mb-5"> Course Playlist </h3>
                <!---
                                                            <div class="bg-red-200 border p-4 relative rounded-md uk-alert" uk-alert>
                                                                        <a class="uk-alert-close absolute right-0 top-0 m-5" uk-close></a>
                                                                        <h3 class="text-lg text-black-400">Alert</h3>
                                                                        <p>Please Use Ads Blocker or Change DNS.<BR><font class-"text-red-600">Goto Mobile Settings Connection/More Networks Chnage DNS "<B>dns.adguard.com</B>"</font><BR>

                                                                        </p>
                                                                    </div>
                                                           --->


                <ul uk-accordion="multiple: true" class="tube-card p-4 divide-y space-y-3">
                    <li class="uk-open">
                        <div class="bg-cyan-200 border p-4 relative rounded-md text-black-400 font-semibold">
                            Last Updated {{ $coursePlaylist->created_at }}
                        </div>
                        <BR>
                        <span class="uk-accordion-title text-md mx-2 font-semibold">
                            <div class="mb-1 text-md font-medium">Playlist</div>

                        </span>
                        <div class="uk-accordion-content mt-3 text-base listbyme" id="course-playlist">

                            <ul class="course-curriculum-list font-medium">
                                @forelse ($coursePlaylist->getVideos as $video)
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2">
                                        </ion-icon>
                                        <a href="{{ route('Watch',['course_id'=>$video->course_id,'play_id'=>$video->video_id,'time'=>'0' ]) }}">{{ $video->name }}</a> <span class="text-md ml-auto text-yellow-700">1
                                        </span>
                                    </li>
                                @empty
                                    There is no Videos in this Section Yet, Please Wait...
                                @endforelse
                            </ul>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
