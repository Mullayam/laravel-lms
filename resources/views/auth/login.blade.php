@extends('layouts.main')
@section('extra_style')
    <meta name="_token" content="{!! csrf_token() !!}" />
@endsection
@section('main')
    <div>

        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            @if (Session()->has('failure'))
                <x-alert text="Error Noticed">{{ Session::get('failure') }}</x-alert>
            @endif
            <div class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">

                <form action="{{ route('doLogin') }}" method="POST">
                    <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Welcome back </h1>
                    @csrf
                    <div>
                        <label class="mb-0" for="username"> Email/Mobile/Username </label>
                        <input type="text" name="credential" placeholder="Email/Mobile/learn_******"
                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        @error('credential')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="mb-0" for="password"> Password </label>
                        <input type="password" name="password" placeholder="******"
                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            onclick="UIkit.notification({message: ' <div class=\'flex\'> <div class=\'text-green-600 text-xl mr-4\'> Please Wait</div></div>'})"
                            class="bg-purple-600 font-semibold p-2.5 mt-5 rounded-md text-center text-white w-full">
                            Get Started</button>
                    </div>
                </form>
                <div class="uk-text-end mt-2">
                    <span>Trouble Signing In? <a href="#Forget-Password" uk-toggle>Forget Password </a> </span>
                </div>
                <div class="uk-heading-line uk-text-center py-2">
                    <span> Or, connect with </span>
                </div>


                <button type="button" onclick="document.location.href='{{ route('GoogleRedirect') }}'"
                    class="relative items-center justify-start w-full py-3 mt-2 overflow-hidden text-lg font-medium text-white bg-red-600 rounded-lg cursor-pointer">
                    <span class="absolute left-5 bottom-3 justify-center w-16 h-full mr-3 py-3 fill-current">
                        <img src="https://img.icons8.com/fluency/48/000000/google-plus-squared.png"
                            alt="https://www.vectorlogo.zone/logos/google/google-tile.svg">
                    </span>
                    <span class="inline-block pl-5 text-base text-center w-full">Login with Google</span>
                </button>
                <div class="flex items-center space-x-2 justify-center">
                    <button href="#LoginWithPhone" title="Login with OTP" uk-tooltip="title:Login with OTP;pos:bottom"
                        uk-toggle>
                        <ion-icon name="phone-portrait-outline" class="p-2 rounded-full text-2xl bg-gray-100 text-blue-600">
                        </ion-icon>
                    </button>
                    <button href="#GetOTPWhatsapp" uk-toggle uk-tooltip="title:Get OTP on Whatsapp ; pos: bottom">
                        <ion-icon name="logo-whatsapp" class="p-2 rounded-full text-2xl bg-green-300 text-white-400">
                        </ion-icon>
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('extra_scripts')
    <div id="Forget-Password" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default m-3" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Forget Password</h2>
            </div>
            <form action="{{ route('RecoverPassword') }}" method="POST">
                @csrf
                <div class="uk-modal-body">

                    <div>
                        <label class="mb-0" for="username"> Username / Email Address/ Phone </label>
                        <input type="text" name="infotag"placeholder=" Username / Email Address /Phone" required
                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>

                </div>
                <div class="uk-modal-footer text-right">
                    <button class="button gray uk-modal-close" type="button">Cancel</button>
                    <button class="button" type="submit" name="forgot">Reset Password</button>
                </div>
            </form>
        </div>
    </div>

    <div id="LoginWithPhone" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default m-3" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Login With Phone</h2>
            </div>


            <div class="uk-modal-body">

                <div>
                    <label class="mb-0" for="username"> Enter Phone Number</label>
                    <input type="text" id="phonetag" placeholder="Do not Enter Country Code(+91)"
                        class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>

            </div>
            <div class="uk-modal-footer text-right">
                <button class="button gray uk-modal-close" type="button">Back</button>
                <button class="button bg-indigo-400" id="sendotp">Send OTP on Phone</button>
                <button class="button" id="sendotp">Send OTP on Email</button>
            </div>

        </div>
    </div>
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
        @if (Session()->has('ResetPassword'))
            Toastify({
                text: "{{ Session()->get('ResetPassword') }}",
                duration: 3000,
                style: {
                    fontWeight: 400,
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        @endif

        $(document).ready(function() {
            var sendotp = document.getElementById("sendotp");
            var phone = document.getElementById("phonetag").val();
            sendotp.addEventListener('click', function(e) {
                e.preventDefault();
                alert(phone);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name=_token]').attr('content')
                    }
                });
                $.ajax({

                    url: "{{ route('loginViaPhone') }}",
                    type: "post",
                    dataType: "json",
                    data: {
                        phone: phone,

                    },
                    success: function(data) {
                        if (data.status) {
                            UIkit.notification({
                                message: "<div class='flex'> <div class='text-" + data
                                    .type + "-600 mr-4'> " + data.message +
                                    "</div></div>",
                                pos: 'bottom-right'
                            })

                        }
                        showError(data.message)
                    }
                });
            });
        });
    </script>
@endsection
