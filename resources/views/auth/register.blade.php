@extends('layouts.main')
@section('main')
    <div>

        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            @if ($errors->any())
                <x-alert text="Error Message" msg="Something Might Has been wrong"></x-alert>
            @endif
            <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" action="/Add/NewUser" method="POST">
                @csrf
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>
                <div class="grid lg:grid-cols-2 gap-3">
                    <x-input placeholder="First Name" name="firstname">First Name</x-input>
                    <x-input placeholder="Last Name" name="lastname">Last Name</x-input>
                </div>
                <x-input type="email" placeholder="name@gmail.com" name="email">Email</x-input>
                <x-input type="password" placeholder="Password" name="user_password">Password</x-input>
                <x-input placeholder="Enter Without +91 " name="mobile_number">Phone</x-input>
                <x-input value={{ $username }} hidden placeholder="Username" name="Username">Username Will Auto
                    Generated</x-input>
                <div class="checkbox">
                    <input type="checkbox" id="chekcbox1" checked="">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html"
                            target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                    </label>
                </div>

                <div>
                    <button type="submit"
                        onclick="UIkit.notification({message: ' <div class=\'flex\'> <div class=\'text-blue-600 mr-4\'> Please Wait</div></div>'})"
                        class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                        Get Started
                    </button>
                </div>
                <hr>
                <div class="uk-text-center">Already Have Account?
                    <a href="/Auth/Login">
                        <x-mintoast text="Redirecting...">Login Here</x-mintoast>
                    </a>
                </div>

                <div class="uk-heading-line uk-text-center py-5"><span> Or, connect with </span></div>


                <button type="button"
                onclick="document.location.href='{{route('GoogleRedirect')}}'"
                    class="relative items-center justify-start w-full py-3 mt-2 overflow-hidden text-lg font-medium text-white bg-red-600 rounded-lg cursor-pointer">
                    <span class="absolute left-0 flex items-center justify-center w-16 h-full mr-3 fill-current">
                        <img src="https://img.icons8.com/fluency/48/000000/google-plus-squared.png"
                            alt="https://www.vectorlogo.zone/logos/google/google-tile.svg">
                    </span>
                    <span class="inline-block pl-5 text-base text-center w-full">Login with Google</span>
                </button>


                <div class="flex items-center space-x-2 justify-center">
                    <button>
                        <ion-icon title="Login with OTP" name="phone-portrait-outline"
                            class="p-2 rounded-full text-2xl bg-gray-100 text-blue-600"></ion-icon>
                    </button>
                </div>
            </form>


        </div>
    </div>
@endsection
@section('extra_scripts')
    <script>
        @if ($errors->any())

            @foreach ($errors->all() as $error)
                Toastify({
                    text: "{!! $error !!}",
                    duration: 3000,
                    style: {
                        fontWeight: 400,
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    }
                }).showToast();
            @endforeach
        @endif
    </script>
@endsection
