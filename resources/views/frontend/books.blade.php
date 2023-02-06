@extends('layouts.main')
@section('main')

    <div class="container">

        <div class="lg:flex lg:space-x-10">

            <div class="lg:w-full">

                <div class="text-2xl font-semibold"> Books </div>

                <nav class="cd-secondary-nav border-b md:m-0 -mx-3 nav-small">
                    <ul>
                        <li class="active"><a href="#" class="lg:px-2"> Suggestions </a></li>

                    </ul>
                </nav>

                <div class="relative mt-2">
                    <div class="uk-container px-1 py-3">
                        <ul class="uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-4 uk-grid-small uk-grid text-sm font-medium text-center">
                            @foreach ($books as $book)
                                <li class="m-2">
                                    <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                        <a href="{{ route('BooksOverview',['Book_id'=>$book->book_id])}}">
                                            <img src="{{$book->img}}" alt=""
                                                class="w-full h-44 object-cover">
                                            <div class="p-3 truncate"> {{$book->name}}</div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach


                        </ul>

                             {{ $books->links() }}
                    </div>
                </div>

                <br>



            </div>

        </div>

    </div>

    <!-- footer -->

    </div>
@endsection
