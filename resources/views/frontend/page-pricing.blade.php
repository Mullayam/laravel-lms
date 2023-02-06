@extends('layouts.main')
@section('main')
    <div class="container">
        <div class="flex flex-col items-center lg:py-6 text-center">
            <h3 class="mt-2 mb-2.5 font-semibold text-2xl lg:text-3xl"> Pricing Plans </h3>
            <p> Our plans are simple, Start Learning To Day To Became Expart Web Developments And User Interface Desinger.
            </p>
            <ul class="bg-gray-100 font-medium inline-flex my-4 px-1.5 py-2.5 pricing-swicher rounded-md space-x-1 mt-6"
                uk-switcher="connect: .change-plan ;animation: uk-animation-slide-top-medium, uk-animation-scale-up">
                <li class="uk-active"><a class="py-2 px-8 rounded-md whitespace-nowrap" href="#">Monthly billing</a></li>
                <li class=""><a class="py-2 px-8 rounded-md whitespace-nowrap relative" href="#">
                        <span
                            class="-right-4 -top-4 absolute bg-yellow-100 border border-yellow-200 font-semibold hidden md:block px-1.5 py-0.5 rotate-3 rounded-full shadow-sm text-xs text-yellow-400 transform">
                            30%</span> Yearly billing</a>
                </li>

            </ul>
        </div>
        @if ('failure')
            <x-alert text="Error">The Plan you Selected is no longer active or invalid</x-alert>
        @endif
        <div class="grid lg:grid-cols-3 lg:mt-20 mt-4 lg:gap-y-0 gap-y-5">

            <!-- card-1 -->
            <div class="bg-white p-8 rounded-l-lg shadow space-y-2">

                <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Basic Plan</h4>
                <p> To start your learning to day you will get free All Course.</p>

                <div class="bg-gray-100 p-3 rounded space-x-1.5">
                    <ul class="uk-switcher change-plan">
                        <li class="flex items-end justify-center">
                            <div class="font-semibold text-3xl"> Rs.11.4 </div>
                            <div class="font-medium text-lg uk-animation-slide-left-small"> / monthly </div>
                        </li>
                        <li class="flex items-end justify-center">
                            <div class="font-semibold text-3xl"> Rs.99 </div>
                            <div class="font-medium text-lg"> / Yearly </div>
                        </li>

                    </ul>
                </div>

                <ul class="py-3 space-y-1 text-gray-500">
                    <li>250+ Books/PDF Free </li>
                    <li> Ads Free Experience(NOT PLAYER ADS) </li>
                    <li> Interactive tools </li>
                    <li> Request/On-demand learning </li>
                    <li> 50/100 Download Allows </li>
                    <li> 2 Device Login Enable </li>
                </ul>
                <a href="/Subscription/BASIC"
                    class="block border p-3 rounded-md space-x-1.5 text-center text-purple-900 text-sm">Get Started </a>
            </div>

            <!-- card-2 -->
            <div class="bg-white pt-16 lg:pt-8 p-8 shadow-xl space-y-2 relative -my-3 rounded-b-md">

                <div
                    class="lg:-top-10 top-0 absolute bg-blue-600 left-0 p-3 rounded-t-md text-center text-white w-full font-semibold">
                    Recommended </div>

                <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Bundle Plan</h4>
                <p> To start your learning to day you will get free All Course .</p>

                <div class="bg-gray-100 p-3 rounded space-x-1.5">
                    <ul class="uk-switcher change-plan">
                        <li class="flex items-end justify-center">
                            <div class="font-semibold text-3xl"> Rs.22.8 </div>
                            <div class="font-medium text-lg uk-animation-slide-left-small"> / monthly </div>
                        </li>
                        <li class="flex items-end justify-center">
                            <div class="font-semibold text-3xl"> Rs.129 </div>
                            <div class="font-medium text-lg"> / Yearly </div>
                        </li>
                    </ul>
                </div>

                <ul class="py-3 space-y-1 text-gray-500">
                    <li> 600+ Books/PDF Free </li>
                    <li> Ads Free Experience </li>
                    <li> Access entire course library </li>
                    <li> 99+ HD Video Courses </li>
                    <li> 150/250 Download Allows </li>
                    <li> Request/On-demand learning </li>
                    <li> Create Own Playlist/Save Videos </li>
                    <li> Multi Device Login Enable </li>
                </ul>
                <br>
                <a href="/Subscription/PRO"
                    class="bg-blue-600 block p-3 rounded-md space-x-1.5 text-center text-sm text-white">Get Started </a>

            </div>

            <!-- card-3 -->
            <div class="bg-white p-8 rounded-r-lg shadow space-y-2">


                <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Pay As you Go</h4>
                <p> To start your learning to day you will get free All Course .</p>

                <div class="bg-gray-100 p-3 rounded space-x-1.5">
                    <ul class="uk-switcher change-plan">
                        <li class="flex items-end justify-center">
                            <div class="font-semibold text-3xl">Rs.29 </div>
                            <div class="font-medium text-lg uk-animation-slide-left-small">Per Course<span
                                    class="text-red-500">*</span></div>
                        </li>
                        <li class="flex items-end justify-center">
                            <div class="font-semibold text-3xl">Rs.576</div>
                            <div class="font-medium text-lg">/All<span class="text-red-500">*</span> </div>
                        </li>
                    </ul>
                </div>

                <ul class="py-3 space-y-1 text-gray-500">
                    <li> Telegram Batches <span class="text-red-500">*</span> </li>
                    <li> Benifits of BASIC/PRO excluded<span class="text-red-500">*</span> </li>
                    <li>Direct High Speed Server Access</li>
                    <li>No Hidden Charges</li>
                    <li>Pay Per Download Allows<span class="text-red-500">*</span> </li>
                    <li>No Cancellation<span class="text-red-500">*</span></li>
                    <li> High Quality Video Courses </li>
                    <li> Direct Protected Link </li>
                    <li>Get All Course on Yearly Basis </li>
                </ul>
                <a href="/Course/Show"
                    class="block border p-3 rounded-md space-x-1.5 text-center text-purple-900 text-sm">Get Started </a>
            </div>
            <!-- card-3 -->


        </div>

        <div class="my-20">

            <div class="lg:text-center my-2">
                <div> Faq </div>
                <div class="mb-6 font-semibold lg:text-2xl text-lg"> Frequently Asked Question :</div>
            </div>

            <div class="grid lg:grid-cols-2 gap-5">

                <div>
                    <div class="text-lg font-medium mb-2"> How To Get Started With Learn?</div>
                    <div>Create account first , verify your identity,select a course, enroll in it, start Watching</div>
                </div>
                <div>
                    <div class="text-lg font-medium mb-2"> Can I Cancel My Subscription?</div>
                    <div>Yes,Only Basic/Pro can be cancelled. </div>
                </div>
                <div>
                    <div class="text-lg font-medium mb-2"> How Can I Create New Course? </div>
                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. </div>
                </div>
                <div>
                    <div class="text-lg font-medium mb-2"> Can I Cancel At Anytime? </div>
                    <div> Offcourse,within 5 Minutes of successfull transaction, Goto Account->Subscription , click on
                        Cancel.Bundle or PAY AS YOU GO are excluded</div>
                </div>
                <div>
                    <div class="text-lg font-medium mb-2"> How To Choose A Plan First? </div>
                    <div> Click on Get Started, choose your billing cycle (monthly/yearly), then choose Payment method
                        UPI/CARDS/PAYTM </div>
                </div>
            </div>
        </div>


    </div>
@endsection
<!-- Main Contents -->
