@extends('layouts.main')
@section('main')
     <div class="container">

                <h1 class="text-2xl font-bold text-gray-900 leading-0 my-3"> Notes/PDFs </h1>
                <nav class="cd-secondary-nav border-b md:m-0 -mx-5 nav-small">
                    <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                        <li><a href="#" class="lg:px-2">All</a></li>

                        <li><a href="#" class="lg:px-2">Carreer Will</a></li>
                    </ul>
                </nav>

                <div class="uk-switcher my-12" id="components-nav">


                    <div>
                        <div class="container-lg-12">
                            <iframe src="https://drive.google.com/embeddedfolderview?id=1DPxP0u-BKxzlFvSroBXFFI_rta1hHNiV#list" width="100%" height="500" frameborder="0"></iframe>
                        </div>

                    </div>
                    <div>
                        <div class="container-lg-12">
                            <iframe src="https://drive.google.com/embeddedfolderview?id=1GkFKSs_KIjNFcrQ88n4TTgzad8fJpLW1#list" width="100%" height="500" frameborder="0"></iframe>
                        </div>

                    </div>
                </div




                <!-- footer -->
            </div>

@endsection
