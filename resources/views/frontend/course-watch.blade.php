@extends('layouts.guest')
@section('extra_styles')
    <style>
        @media(min-width: 1028px) {
            .relative {
                margin-top: 0 !important;
            }
        }

        .video_settings {
            visibility: hidden;
            position: absolute;
            width: 300px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
@endsection
@section('guest')
    <div id="wrapper" class="course-watch">

        <!-- sidebar -->
        <div class="sidebar">
            <!-- slide_menu for mobile -->
            <span class="btn-close-mobi right-4 left-auto" uk-toggle="target: #wrapper ; cls: is-active"></span>

            <!-- back to home link -->
            <div class="flex justify-between lg:-ml-1 mt-1 mr-2">
                <a href="#modal-example" class="flex items-center text-blue-500" uk-toggle>
                    <ion-icon name="chevron-back-outline" class="md:text-lg text-2xl"></ion-icon>
                    <span class="text-sm md:inline hidden"> back</span>
                </a>
            </div>

            <!-- title -->
            <h1 class="lg:text-2xl text-lg font-bold mt-2 line-clamp-2">{{ $video->getcourse->course_name }}</h1>
            <!-- sidebar list -->
            <div class="sidebar_inner is-watch-2" data-simplebar>

                <div class="lg:inline hidden">
                    <div class="relative overflow-hidden rounded-md bg-gray-200 h-1 mt-4">
                        <div class="w-2/4 h-full bg-green-500"></div>
                    </div>
                    <div class="mt-2 mb-3 text-sm border-b pb-3">
                        <div> 46% Complete</div>
                        <div> date</div>
                    </div>
                </div>

                <div id="curriculum">
                    <div uk-accordion="multiple: true" class="divide-y space-y-3">

                        <div class="uk-open">
                            <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                <div class="mb-1 text-xl font-medium"> Playlist </div>
                            </a>
                            <div class="uk-accordion-content mt-3">
                                <ul class="course-curriculum-list">
                                    @forelse (\App\Models\Video::where('course_id',$video->course_id)->get() as  $video)
                                        <li>
                                            <a
                                                href="{{ route('Watch', ['course_id' => $video->course_id, 'play_id' => $video->video_id]) }}">
                                                {{ $video->name }}
                                                <span class="">
                                                    @if ($play_id == $video->video_id)
                                                        Playing
                                                    @endif
                                                </span>
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            <a>
                                                No Video Found
                                            </a>
                                        </li>
                                    @endforelse
                                </ul>

                            </div>
                        </div>


                    </div>
                </div>

                {{-- <div class="mt-5">
                    <h3 class="mb-4 text-lg font-semibold"> Quizzes</h3>
                    <ul>
                        <li><a href="#">
                                <ion-icon name="timer-outline" class="side-icon"></ion-icon> Taking small eco-friendly steps
                            </a></li>
                        <li><a href="#">
                                <ion-icon name="timer-outline" class="side-icon"></ion-icon> Making your house eco-friendly
                            </a></li>
                        <li><a href="#">
                                <ion-icon name="timer-outline" class="side-icon"></ion-icon> Building and renovating for
                                eco-friendly homes
                            </a></li>
                        <li><a href="#">
                                <ion-icon name="log-in-outline" class="side-icon"></ion-icon> Taking small eco-friendly
                            </a>
                            <ul>
                                <li><a href="#"> Making your house </a></li>
                                <li><a href="#"> Building and renovating </a></li>
                                <li><a href="#"> Taking small </a></li>
                            </ul>
                        </li>
                    </ul>

                </div> --}}

            </div>

            <!-- overly for mobile -->
            <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

        </div>

        <!-- Main Contents -->
        <div class="main_content">
            <div class="relative" style="margin-top:4rem;">
                <!-- to autoplay video uk-video="automute: true" -->
                <div class="embed-video">
                    <video width="100%" id="learn-player" height="100%" src="{{ $video->link }}" autoplay></video>
                </div>
                <div class="w-full h-full absolute inset-0"></div>
            </div>

            <div class="card p-1 m-2 " id="showControls"
                style="background: linear-gradient(to left,  #ada996, #f2f2f2, #dbdbdb, #eaeaea)">
                <div class="md:flex row  m-2 space-x-1 md:pt-0 pt-2">
                    <div class="items-end mr-2">
                        <button uk-tooltip="title: Volume Off ; pos: top" id="volumeBtn">
                            <span
                                class="material-symbols-rounded bg-green-600  p-1 text-white  rounded-full mainVolumeBtn">volume_off</span>
                        </button>
                        <div class="bg-white w-auto shadow-md mx-auto p-1 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                            uk-drop="mode: hover;pos: bottom-right">
                            <ul class="space-y-1">
                                <li>
                                    <input type="range" id="volumeSlider" min="0" value="1" max="1"
                                        step="any" class="w-30" />
                                </li>
                            </ul>
                        </div>
                        <button uk-tooltip="title: Mute ; pos: top">
                            <span
                                class="material-symbols-rounded bg-green-600  p-1 text-white  rounded-full">volume_mute</span>
                        </button>
                        <button uk-tooltip="title: Show Playlist ; pos: top">
                            <span
                                class="material-symbols-rounded bg-green-600  p-1 text-white  rounded-full">volume_down</span>
                        </button>
                        <button uk-tooltip="title: Show Playlist ; pos: top">
                            <span
                                class="material-symbols-rounded bg-green-600  p-1 text-white  rounded-full">volume_up</span>
                        </button>


                        <button uk-tooltip="title: Back 30s ; pos: top">
                            <span
                                class="material-symbols-rounded bg-purple-600  p-1 text-white  rounded-full ">replay_30</span>
                        </button>
                        <button uk-tooltip="title: Back 10s ; pos: top">
                            <span
                                class="material-symbols-rounded bg-red-600  p-1 text-white  rounded-full skip-backward">replay_10</span>
                        </button>

                        <button uk-tooltip="title: Play ; pos: top">
                            <span
                                class="material-symbols-rounded bg-indigo-600  p-1 text-white  rounded-full play_pause">play_arrow</span>
                        </button>

                        <button uk-tooltip="title: Pause ; pos: top">
                            <span class="material-symbols-rounded bg-indigo-600  p-1 text-white  rounded-full">pause</span>
                        </button>
                        <button uk-tooltip="title: Replay ; pos: top">
                            <span
                                class="material-symbols-rounded bg-red-600  p-1 text-white  rounded-full auto-play ">replay_circle_filled</span>
                        </button>
                        <button uk-tooltip="title: Skip 10s ; pos: top">
                            <span
                                class="material-icons bg-red-600 text-white p-1 rounded-full skip-forward">forward_10</span>
                        </button>
                        <button uk-tooltip="title: Forward 30s ; pos: top">
                            <span
                                class="material-symbols-rounded bg-purple-600  p-1 text-white  rounded-full">forward_30</span>
                        </button>





                    </div>
                    <div class="items-center m-auto ml-5">

                        <button uk-tooltip="title: Save To Playlist ; pos: top">
                            <span
                                class="material-symbols-rounded bg-gray-600  p-1 text-white  rounded-full">playlist_add</span>
                        </button>

                        <button uk-tooltip="title:  Video Saved ; pos: top">
                            <span
                                class="material-symbols-rounded bg-gray-600  p-1 text-white  rounded-full">playlist_add_check</span>
                        </button>
                        <button uk-tooltip="title: PIP ; pos: top">
                            <span
                                class="material-icons bg-yellow-600 text-white p-1 rounded-full pic-in-pic">picture_in_picture_alt</span>
                        </button>
                        <button uk-tooltip="title: Full Screen ; pos: top">
                            <span
                                class="material-icons bg-yellow-600 text-white p-1 rounded-full fullscreen">fullscreen</span>
                        </button>

                        <button uk-tooltip="title: Exit Full Screen ; pos: top">
                            <span class="material-icons bg-yellow-600 text-white p-1 rounded-full ">fullscreen_exit</span>
                        </button>
                        <button uk-tooltip="title: Video Settings; pos: bottom">

                            <span class="material-symbols-rounded bg-yellow-600  p-1 text-white rounded-full">
                                <a>video_settings</a></span>

                        </button>
                        <div class="bg-white w-auto shadow-md mx-auto p-1 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                            uk-drop="mode: click;pos: top-left">
                            <ul class="space-y-1">
                                <li>
                                    <button uk-tooltip="title: Change Speed ; pos: right" class="flex items-center px-2">
                                        <span
                                            class="material-icons bg-purple-600 text-white p-1 rounded-full">slow_motion_video</span>
                                        <font
                                            class="ml-2 text-sm hover:bg-gray-200 hover:text-gray-800 py-2  px-2 rounded-md dark:hover:bg-gray-800">
                                            Playback Speed </font>
                                    </button>
                                    <div class="bg-white w-auto shadow-md mx-auto p-1 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                                        uk-drop="mode: hover;pos: top-left">
                                        <ul class="space-y-1 py-2 overflow-y h-40">
                                            <li class="active">Normal</li>
                                            <li>
                                                <hr class="-mx-1 my-1 dark:border-gray-800">
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <hr class="-mx-2 my-2 dark:border-gray-800">
                                </li>
                                <li>
                                    <button uk-tooltip="title: Get App ; pos: top" class="flex items-center px-2 ">
                                        <span
                                            class="material-symbols-rounded bg-blue-600  p-1 text-white  rounded-full">get_app</span>
                                        <font
                                            class="ml-2 text-sm hover:bg-gray-200 hover:text-gray-800 py-2 px-2 rounded-md dark:hover:bg-gray-800">
                                            Download App</font>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="cd-secondary-nav border-b md:p-2 lg:px-6 py-2 bg-white "
                uk-sticky="cls-active:shadow-sm ; media: @s">
                <ul uk-switcher="connect: #course-tabs; animation: uk-animation-fade">
                    <li><a href="#" class="lg:px-2"> Description </a></li>
                    <li><a href="#" class="lg:px-2"> Comments </a></li>
                </ul>
            </nav>




            <div class="container">

                <div class="max-w-2xl lg:py-6 mx-auto uk-switcher" id="course-tabs">

                    <!--  Description -->
                    <div>

                        <h4 class="text-2xl font-semibold"> About this course </h4>

                        <p> Learn Web Development Without Writing Much Code </p>

                        <hr class="my-5">

                        <div class="grid lg:grid-cols-3 mt-8 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold"> Description </h3>
                            </div>
                            <div class="col-span-2">
                                <p>


                                    <br>
                                    <a href="#" class="text-blue-500">Read more .</a>
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold"> What You’ll Learn </h3>
                            </div>
                            <div class="col-span-2">
                                <ul>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Setting up the environment</li>

                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold"> Requirements </h3>
                            </div>
                            <div class="col-span-2">
                                <ul class="list-disc ml-5 space-y-1">
                                    <li>Any computer will work: Windows, macOS or Linux</li>

                                </ul>
                            </div>

                        </div>


                    </div>

                    <!--  Comment -->
                    <div>
                        <h3 class="text-xl font-semibold mb-3"> Announcement </h3>
                        <div class="flex items-center gap-x-4 mb-5">
                            <img src="../assets/images/avatars/avatar-4.jpg" alt=""
                                class="rounded-full shadow w-12 h-12">
                            <div>
                                <h4 class="-mb-1 text-base"> Stella Johnson</h4>
                                <span class="text-sm"> Instructor <span class="text-gray-500"> 1 year ago </span> </span>
                            </div>
                        </div>

                        <h4 class="leading-4 text-xl"> Nam liber tempor cum soluta nobis eleifend option congue imperdiet
                            doming id quod mazim placerat facer possim assum.</h4>
                        <p> ff</p>

                    </div>





                </div>
            </div>
        </div>
        <!-- This is the modal -->
        <div id="modal-example" class="lg:ml-80" uk-modal>
            <div class="uk-modal-dialog uk-modal-body rounded-md shadow-xl">
                <button
                    class="absolute block top-0 right-0 m-6 rounded-full bg-gray-100 leading-4 p-1 text-2xl uk-modal-close"
                    type="button">
                    <i class="icon-feather-x"></i>
                </button>

                <div class="text-sm mb-2"> {{ $video->getcourse->course_name }} </div>
                <h2 class="mb-5 font-semibold text-2xl"> {{ $video->name }}</h2>
                <p class="text-base">Do You want to skip the rest of this chapter and chumb to next chapter.</p>

                <div class="text-right  pt-3 mt-3">
                    <a class="py-2 inline-block px-8 rounded-md hover:bg-gray-200 uk-modal-close"> Stay
                    </a>
                    <a href="{{ route('CoursePlaylist', ['course_id' => $video->course_id]) }}" class="button"> Continue
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('extra-scripts')
    <script>
        wrapper
        const controls = document.querySelector("#showControls"),
            wrapper = document.querySelector("#wrapper"),
            mainVideo = document.querySelector("video"),
            videoTimeline = document.querySelector(".video-timeline"),
            progressBar = document.querySelector(".progress-bar"),
            volumeBtn = document.querySelector("#volumeBtn"),
            volumeSlider = document.querySelector("#volumeBtnSlider");
        currentVidTime = document.querySelector(".current-time"),
            videoDuration = document.querySelector(".video-duration"),
            skipBackward = document.querySelector(".skip-backward"),
            skipForward = document.querySelector(".skip-forward"),
            playPauseBtn = document.querySelector(".play-pause"),
            speedBtn = document.querySelector(".playback-speed span"),
            auto_play = document.querySelector(".auto-play"),
            speedOptions = document.querySelector(".speed-options"),
            pipBtn = document.querySelector(".pic-in-pic"),
            fullScreenBtn = document.querySelector(".fullscreen");
        let timer;

        const hideControls = () => {
            if (mainVideo.paused) return;
            timer = setTimeout(() => {
                // controls.classList.remove("d-none");
            }, 3000);
        }
        hideControls();

        wrapper.addEventListener("mousemove", () => {
            controls.classList.add("show-controls");
            clearTimeout(timer);
            hideControls();
        });

        const formatTime = time => {
            let seconds = Math.floor(time % 60),
                minutes = Math.floor(time / 60) % 60,
                hours = Math.floor(time / 3600);

            seconds = seconds < 10 ? `0${seconds}` : seconds;
            minutes = minutes < 10 ? `0${minutes}` : minutes;
            hours = hours < 10 ? `0${hours}` : hours;

            if (hours == 0) {
                return `${minutes}:${seconds}`
            }
            return `${hours}:${minutes}:${seconds}`;
        }

        videoTimeline.addEventListener("mousemove", e => {
            let timelineWidth = videoTimeline.clientWidth;
            let offsetX = e.offsetX;
            let percent = Math.floor((offsetX / timelineWidth) * mainVideo.duration);
            const progressTime = videoTimeline.querySelector("span");
            offsetX = offsetX < 20 ? 20 : (offsetX > timelineWidth - 20) ? timelineWidth - 20 : offsetX;
            progressTime.style.left = `${offsetX}px`;
            progressTime.innerText = formatTime(percent);
        });

        videoTimeline.addEventListener("click", e => {
            let timelineWidth = videoTimeline.clientWidth;
            mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
        });

        mainVideo.addEventListener("timeupdate", e => {
            let {
                currentTime,
                duration
            } = e.target;
            let percent = (currentTime / duration) * 100;
            progressBar.style.width = `${percent}%`;
            currentVidTime.innerText = formatTime(currentTime);
        });

        mainVideo.addEventListener("loadeddata", () => {
            videoDuration.innerText = formatTime(mainVideo.duration);
        });

        const draggableProgressBar = e => {
            let timelineWidth = videoTimeline.clientWidth;
            progressBar.style.width = `${e.offsetX}px`;
            mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
            currentVidTime.innerText = formatTime(mainVideo.currentTime);
        }

        volumeBtn.addEventListener("click", () => {
            if (!volumeBtn.classList.contains("fa-volume-high")) {
                mainVideo.volume = 0.5;
                volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high");
            } else {
                mainVideo.volume = 0.0;
                volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark");
            }
            volumeSlider.value = mainVideo.volume;
        });

        volumeSlider.addEventListener("input", e => {
            mainVideo.volume = e.target.value;
            if (e.target.value == 0) {
                return volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark");
            }
            volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high");
        });



        document.addEventListener("click", e => {
            if (e.target.tagName !== "SPAN" || e.target.className !== "material-symbols-rounded") {
                speedOptions.classList.remove("show");
            }
        });
l


        speedBtn.addEventListener("click", () => speedOptions.classList.toggle("show"));
        pipBtn.addEventListener("click", () => mainVideo.requestPictureInPicture());
        skipBackward.addEventListener("click", () => mainVideo.currentTime -= 5);
        skipForward.addEventListener("click", () => mainVideo.currentTime += 5);
        mainVideo.addEventListener("play", () => playPauseBtn.classList.replace("fa-play", "fa-pause"));
        mainVideo.addEventListener("pause", () => playPauseBtn.classList.replace("fa-pause", "fa-play"));
        pla
        videoTimeline.addEventListener("mousedown", () => videoTimeline.addEventListener("mousemove",
            draggableProgressBar));
        document.addEventListener("mouseup", () => videoTimeline.removeEventListener("mousemove", draggableProgressBar));



let mainSource = document.querySelector("video")
        let volumeChangeBtn = document.querySelector('.mainVolumeBtn');
        let play_pause = document.querySelector('.play_pause');
        var elem = document.querySelector('input[type="range"]');

        var rangeValue = function() {
            var newValue =  elem.value;
            console.log(newValue)
            mainSource.volume = newValue
            if (newValue < 0.3) {
                return volumeChangeBtn.innerText.replace("volume_off", "volume_mute");
            }
            if (newValue < 0.6) {
                return volumeChangeBtn.innerText.replace("volume_mute", "volume_down");
            }
            if (newValue > 0.8) {
                return volumeChangeBtn.innerText.replace("volume_down", "volume_up");
            }
            volumeChangeBtn.innerText = "volume_off";
        }


        elem.addEventListener("input", rangeValue);
        let play_pause = document.querySelector('.play_pause');

        play_pause.addEventListener("click", function() {
            if(mainSource.paused){
                mainSource.play();
            play_pause.innerText.replace('pause','play_arrow');
            }else{
                mainSource.pause();
             play_pause.innerText.replace('play_arrow','pause')
            }
        });

    </script>
@endsection
