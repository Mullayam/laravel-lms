@extends('layouts.main')
@section('main')
    <div class="container">

        <h1 class="text-2xl font-bold text-gray-900 leading-0 my-3"> Study Material </h1>
        <p style="color:red;font-weight:600;">If you do not found your one , please write us. We'll try to Add,</p> <a
            href="/Request-Portal">Create A Request</a>
        <nav class="cd-secondary-nav border-b md:m-0 -mx-5 nav-small">
            <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                <li><a href="#" class="lg:px-2">NCERT</a></li>
                <li><a href="#" class="lg:px-2">Others</a></li>


            </ul>
        </nav>

        <div class="uk-switcher my-12" id="components-nav">

            <!-- NCERT -->
            <div>
                <div class="container-lg-12">
                    <iframe src="https://drive.google.com/embeddedfolderview?id=1E61PsX3FvmC2XzvzoY0fl_-K3-zz2HRY#list"
                        width="100%" height="500" frameborder="0"></iframe>
                </div>

            </div>
            <!-- Banking -->
            <div>
                <div class="container-lg-12">
                    <iframe src="https://drive.google.com/embeddedfolderview?id=1TQujGZEGj-P_AU_s41m0_xk47t6j0yr8#list"
                        width="100%" height="500" frameborder="0"></iframe>
                </div>

            </div>
            <!-- UPSC Notes -->

        </div>

    </div>
@endsection
