 @extends('layouts.main')
@section('main')


        <!-- Main Contents -->
            <div class="container">

                <div class="max-w-3xl lg:p-8 pb-0 mx-auto">

                    <!-- article content -->
                    <h4 class="font-semibold text-3xl text-3xl uk-heading-line">Welcome To Learn - Enjoys </h4>
                    <div class="md:space-y-4 space-y-3 leading-8 md:text-base">

                        <div class="text-gray-500"> Updated April 04, 2022</div>
                        <div class="font-semibold md:text-3xl text-2xl text-gray-700 pt-2"> Terms </div>


                        <div class="font-semibold md:text-2xl text-xl text-gray-700 md:pt-12 pt-10"> Using our services </div>
                        {!! $content !!}
                    </div>

                </div>

            </div>


@endsection
