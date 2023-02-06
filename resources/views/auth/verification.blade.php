@extends('layouts.main')
@section('main')
    <div class="lg:pt-16" style="background: #f8f9fa;">

        <div class="container m-auto px-4">

            <div class="md:flex justify-between items-center">
                <div class="md:w-5/12 md:order-1 md:block hidden">
                    <img src="/cdn/static/assets/images/otp.png" alt="" class="lg:w-auto w-44 mx-auto">
                </div>

                <div class="md:w-6/12 md:text-left text-center">

                    <div class="md:text-3xl text-xl font-semibold mb-7">An OTP has been Sent to Your Email <BR>

                        <P style="color:red;">Check Your Junk/Spam Box</P>
                    </div>

                    <form action="{{ route('UserVerfied') }}" class="js-focus-state input-group mb-3" method="post">
                        @csrf
                        <div class="input-group-prepend">
                        </div>

                        <div class="input-with-icon border rounded-md">

                            <input type="text" class="input-text w-20" placeholder="Enter 6 Digit OTP" name="verifyotp"
                                required>
                        </div> <BR>
                        <button type="submit"  class="button info">Done</button>
                    </form>

                    <p class="text-sm">
                        Didn't Receive OTP?

                        <button name="resendotp" type="submit" class="text-purple-700" href="#">Request New
                            OTP</button>

                    <P> if you don't Received OTP yet Please Login and Follow Further Steps.</P>
                    </p>




                </div>
            </div>

        </div>
        <div class="-mt-2 lg:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 220" class="text-white fill-current">
                <path
                    d="M918.34,99.41C388.23,343.6,47.11,117.12,0,87.54V220H1600V87.54C1378.72-76.71,1077.32,27.41,918.34,99.41Z">
                </path>
            </svg>
        </div>


    </div>
@endsection
