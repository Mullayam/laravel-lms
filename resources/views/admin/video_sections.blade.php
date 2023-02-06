@extends('layouts.admin')
@section('extra_style')
    <meta name="_token" content="{!! csrf_token() !!}" />
@endsection
@section('admin_content')
    <div class="container p-0">

        <div class="space-y-5 lg:w-9/12 mx-auto mt-2">

            <!-- course Curriculum -->
            <div id="Playlist">

                <div class="inline-block">
                    <h1 class="mb-4 text-xl font-semibold lg:mb-5"> Course Sections <i></i></h1>
                    <span class="text-md ml-auto">
                        <button class="bg-red-600 px-3 py-2 mb-2 font-medium rounded-md self-center text-center text-white"
                            data-target="#modal-sections" uk-toggle>
                            Create New Section For this Course
                        </button>

                        <button data-target="#modal-add-video" class="button  mb-2" uk-toggle>Add Video</button>
                        <button class="bg-indigo-600 px-3 py-2 mb-2 font-medium rounded-md self-center text-center text-white">
                            Show All Video</button>
                    </span>
                </div>
                <ul uk-accordion="multiple: true" class="tube-card p-4 divide-y space-y-3">
                    <li class="uk-open">
                        <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                            <div class="mb-1 text-sm font-medium"> Sections List </div>
                        </a>
                        <div class="uk-accordion-content mt-3 text-base listbyme" id="course-playlist">
                            <ul class="course-curriculum-list font-medium">
                                @forelse ($CourseSections as $section)
                                    <li class="hover:bg-gray-200 p-2 flex rounded text-black-400 bg-cyan-200 border mb-1"
                                        id="lists">
                                        <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                        <span class="text-md font-semibold">{{ $section->section_title }}</span>
                                    </li>
                                @empty
                                    There is no Section Added For This Course,Create New One
                                @endforelse
                            </ul>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="modal-sections" uk-modal="" class="uk-modal">
        <div class="uk-modal-body uk-modal-dialog rounded-md shadow-2xl">
            <h2 class="mb-2 uk-modal-title">Create Section</h2>
            <form method="POST"
                action="{{ route('AddSectionPost', ['course_id' =>$course_id]) }}">
                @csrf
                <div class="container">
                    <x-input name="section_title" placeholder="Section Title Goes here">Section Title</x-input>
                    <x-input name="course_id" value="{{ $course_id}}" hidden></x-input>

                </div>
                <div class="uk-modal-footer text-right mt-6 px-0 space-x-1">
                    <button class="button gray uk-modal-close" type="button">Cancel</button>
                    <button class="button" type="submit" id="AddSection">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-add-video" uk-modal="" class="uk-modal">
        <div class="uk-modal-dialog">

            <button class="uk-modal-close-default m-3 uk-icon uk-close" type="button" uk-close=""><svg width="14"
                    height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13"
                        y2="13"></line>
                    <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1"
                        y2="13"></line>
                </svg></button>

            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Add Videos </h2>
            </div>

            <form class="container" id="Add_Video">
                <div class="uk-modal-body uk-overflow-auto" uk-overflow-auto=""
                    style="min-height: 150px; max-height: 418.875px;">

                    <div class="p-2">
                        <label for="video" class="font-medium">Video Title</label>
                        <input type="text" id="video_name" name="name" class="shadow-none with-border">
                    </div>
                    <div class="p-2">
                        <label for="stripe_mode" class="text-sm">Select Course Sections </label>
                        <select id="stripe_mode" name="section_id" class="shadow-none selectpicker with-border" required>
                            @foreach ($CourseSections as $sections)
                                <option value="{{ $sections->id }}"> {{ $sections->section_title }} </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="p-2">
                        <label for="video" class="font-medium">Video Details</label>
                        <textarea type="text" id="video_name" name="details" class="shadow-none with-border px-3 py-2"></textarea>
                    </div>
                    <input type="text" value="{{ $course_id}}" name="course_id"
                        class="shadow-none with-border" hidden>

                    <div class="p-2">
                        <label for="video_mode" class="text-sm">Video Type </label>
                        <select id="video_mode" name="type" class="shadow-none selectpicker with-border" required>
                            <option value="Youtube"> YouTube</option>
                            <option value="mkv"> MKV</option>
                            <option value="mp4" selected> MP4</option>
                            <option value="iframe"> Iframe</option>
                            <option value="embed"> Embed Code</option>
                            <option value="gdrive"> Gdrive</option>

                        </select>
                    </div>
                    <div class="p-2">
                        <label for="video" class="font-medium">Video Link</label>
                        <input type="text" id="video_name" name="link" class="shadow-none with-border">
                    </div>
                    <div class="p-2">
                        <label for="video" class="font-medium">Poster (Leave Empty if nothing)</label>
                        <input type="text" id="video_name" name="poster" class="shadow-none with-border">
                    </div>
                    <div class="p-2">
                        <label for="video_mode" class="text-sm">Select Category </label>
                        <select id="stripe_mode" name="category_id" class="shadow-none selectpicker with-border">
                            <option value="1" selected> Yes</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="video_mode" class="text-sm">Paid/Lock ? </label>
                        <select id="video_mode" name="is_paid" class="shadow-none selectpicker with-border">
                            <option value="1"> Yes</option>
                            <option value="0" selected> No</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="video_mode" class="text-sm">Download ?</label>
                        <select id="video_mode" name="is_down" class="shadow-none selectpicker with-border">
                            <option value="1" selected> Yes</option>
                            <option value="0"> No</option>
                        </select>
                    </div>
                </div>
                <div class="uk-modal-footer text-right">
                    <button class="button gray uk-modal-close" type="button">Cancel</button>
                    <button class="button" id="addVideo" type="button">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('extra_scripts')
    <script>
        @if (Session::has('msg'))
            var msg = "{{ Session::get('msg') }}";
            showError(msg);
        @endif
        var form = $("#Add_Video");
        var add = document.getElementById('addVideo');
        $(document).ready(function() {

           add.addEventListener('click', function(event) {
             event.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name=_token]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ route('AddVideos') }}",
                    dataType:"json",
                    data: form.serialize(),
                    success: function(data) {
                        showError(data.message)
                        if(data.status){
                        $("#Add_Video")[0].reset()
                        }
                    },
                    error: function(data) {
                        showError(data.message)
                    }
                });
            });



            function showError($err = 'Define Error First') {
                Toastify({
                    text: $err,
                    duration: 3000,
                    className: "danger",
                    gravity: "top",
                    position: "center", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        fontWeight: 500,

                        // background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                    offset: {
                        x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                        y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
                    },
                }).showToast();
            }
        });
    </script>
@endsection
