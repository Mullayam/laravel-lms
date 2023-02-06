@extends('layouts.main')
@section('main')
    <!-- Main Contents -->

    <div class="container p-0">

        <div class="lg:flex lg:space-x-10 bg-white rounded-md shadow max-w-3x  mx-auto md:p-8 p-3">
            <div class="lg:w-1/3 w-full">

                <div uk-sticky="offset: 91;bottom: true">
                    <div uk-lightbox>
                        <a href="{{ $bookDetails->img }}" data-caption="{{ $bookDetails->name }}">
                            <img alt="{{ $bookDetails->name }}" src="{{ $bookDetails->img }}"
                                class="shadow-lg rounded-md w-32 md:w-full" style="cursor: zoom-in; ">
                        </a>
                    </div>
                    <div>
                        <ul class="my-5 text-sm space-y-2">
                            <li> Visited 120 </li>
                            <li> Publish on <B>{{ $publish }}</B></li>

                        </ul>
                        <div class="grid grid-cols-2 gap-2">
                            <a onclick="readBook()"
                                class="hover:text-gray-800 bg-gray-300 font-semibold inline-flex items-center justify-center px-4 py-2 rounded-md text-center w-full">
                                <i class="uil-book-open mr-1 md:block hidden"></i> Read </a>
                            @auth
                                <a href="#{{ $bookDetails->d_link }}"
                                    class="bg-blue-600 font-semibold hover:bg-blue-700 inline-flex items-center justify-center px-4 py-2 rounded-md text-center text-white w-full">
                                    Download </a>
                            @else
                                <a id="DownloadBook"
                                    onclick="UIkit.notification({message: ' <div class=\'flex\'> <div class=\'text-red-600  mr-4\'> Please Login To Download</div></div>'})"
                                    class="bg-red-600 font-semibold hover:bg-red-700 inline-flex items-center justify-center px-4 py-2 rounded-md text-center text-white w-full cursor">
                                    Download </a>

                            @endauth
                        </div>
                    </div>

                </div>

            </div>
            <div class="lg:w-2/3 flex-shrink-0 mt-10 lg:m-0">

                <div>

                    <h2 class="font-semibold mb-3 text-xl lg:text-2xl">{{ $bookDetails->name }}</h2>
                    <hr class="mb-5">
                    <h4 class="font-semibold mb-2 text-base"> Description </h4>
                    <div class="space-y-4">
                        <p class="text-lg font-semibold">
                            @if (empty($bookDetails->description))
                                No Description
                            @else
                                {{ $bookDetails->description }}
                            @endif
                        </p>
                        <h4>Book Information</h4>
                        <p class="mb-0"><strong>Page Count</strong>: {{ $bookDetails->pages }}</p>
                        <p class="mt-0"><strong>Size Count</strong>: {{ $bookDetails->size }}</p>

                    </div>

                </div>


            </div>

        </div>

        <!--  books  -->
        <div class="sm:mt-10 mt-6 flex items-end justify-between px-2">
            <h2 class="text-2xl font-semibold"> Related Books </h2>
            <a href="/Books/RelatedTo/{{ $bookDetails->type }}" class="text-blue-500 sm:block hidden"> See all </a>
        </div>
        <div class="relative px-3 md:p-0 mt-3" uk-slider="finite: true">
            <div class="uk-slider-container px-1 py-3">
                <ul
                    class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s
uk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center">
                    @foreach (\App\Models\book::where('type', '=', $bookDetails->type)->get() as $Related)
                        <li>
                            <div class="card">
                                <a href="{{ route('BooksOverview', ['Book_id' => $Related->book_id]) }}">
                                    <img src="{{ $Related->img }}" alt="" class="w-full h-52 object-cover">
                                    <div class="p-3 truncate">{{ $Related->name }}</div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                    href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                    href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>
        </div>


    </div>

    <!-- footer -->
@endsection
@section('extra_scripts')
    <script>

        var Download = document.getElementById('DownloadBook');
        Download.addEventListener("click", ShowError)
        function readBook(){
            alert('This Feature is not Enabled yet')
        }
         function ShowError() {
            Toastify({
                text: "Unable To Download Book PDF",
                duration: 2000,
                style: {
                    fontWeight: 400,
                    background: "linear-gradient(to right, #FF0000, #C34632)",
                }
            }).showToast();
        }
    </script>
@endsection
