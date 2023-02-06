@extends('layouts.main')
@section('main')

        <!-- Main Contents -->
            <div class="container">

                <div class="max-w-3xl mt-lg-11 mx-auto lg:p-10 p-5 tube-card w-auto">

                    <div class="text-center mt-4 mb-6 lg:mt-10">
                        <h1 class="font-semibold md:text-3xl text-xl text-center uk-heading-line"><span>Privacy Policy</span></h1>
                    </div>
                    <article class="space-y-2 uk-article">
                         {!! $content !!}
                    </article>



                </div>


            </div>


@endsection
