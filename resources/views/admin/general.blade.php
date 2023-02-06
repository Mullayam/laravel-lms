@extends('layouts.admin')
@section('admin_content')
    <div class="container ">
        <div class="shadow bg-gray rounded-md">
            <h3 class="text-2xl font-medium mb-5"> General Configuration </h3>


            <div class="grid lg:grid-cols-2 gap-8 py-2">

                <!-- column -->
                <div class="space-y-8">
                    <div class="bg-white rounded-md lg:shadow-md shadow">
                        <h3 class="border-b py-4 px-6 font-semibold"> Website Configuration </h3>
                        <div>
                            <div class="flex justify-between items-center p-4 pl-5">
                                <div>
                                    <h4 class="font-semibold mb-2"> Maintenance Mode</h4>
                                    <div class="text-sm"> Turn the whole site under Maintenance. </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox" checked><span
                                                class="switch-button"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-center p-4 pl-5 space-x-2">
                                <div>
                                    <h4 class="font-semibold mb-2"> Active Site</h4>
                                    <div class="text-sm"> Enable/Disable Site. </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center p-4 pl-5 space-x-2">
                                <div>
                                    <h4 class="font-semibold mb-2"> Account Validation </h4>
                                    <div class="text-sm"> Send an activation link after registration. </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox" checked><span
                                                class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-semibold mb-2"> Account Validation Method </h4>
                                <label for="level" class="text-sm"> Choose the validation type, by SMS or E-mail
                                    address if you choose SMS,
                                    make sure you have configured SMS
                                </label>
                                <select id="level" name="relationship" class="shadow-none selectpicker with-border ">
                                    <option value="0">Email <address></address>
                                    </option>
                                    <option value="1">SMS/ Mobile number</option>
                                </select>

                            </div>
                            <div class="p-6">
                                <h4 class="font-semibold mb-2"> Default Language </h4>
                                <label for="level" class="text-sm"> Set your site default language.
                                </label>
                                <select id="defualtLang" name="defualtLang" class="shadow-none selectpicker with-border ">
                                    <option value="english" selected="">English</option>

                                </select>

                            </div>

                        </div>

                    </div>


                </div>

                <!-- column -->
                <div class="space-y-8">
                    <div class="bg-white rounded-md lg:shadow-md shadow">
                        <h3 class="border-b py-4 px-6 font-semibold"> Login & Registration </h3>
                        <form method="POST" action="{{ route('AuthUpdate') }}">
                            @csrf
                            <div>
                                <div class="flex justify-between items-center p-4 pl-5">
                                    <div>
                                        <h4 class="font-semibold mb-2"> User Registration ?</h4>
                                        <div class="text-sm"> Allow users to create accounts in your site. </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <select name="user_registration" class="shadow-none selectpicker with-border">
                                                <option value="{{ $Auth['user_registration'] }}" selected="">
                                                    {{ $Auth['user_registration'] }}</option>
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-4 pl-5">
                                    <div>
                                        <h4 class="font-semibold mb-2"> Enable Login ?</h4>
                                        <div class="text-sm"> Allow users to create accounts in your site. </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <select name="user_login" class="shadow-none selectpicker with-border">
                                                <option value="{{ $Auth['user_login'] }}" selected="">
                                                    {{ $Auth['user_login'] }}</option>
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-4 pl-5">
                                    <div>
                                        <h4 class="font-semibold mb-2"> Enable Phone Login ?</h4>
                                        <div class="text-sm"> Allow users to create accounts in your site. </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <select name="phone_login" class="shadow-none selectpicker with-border">
                                                <option value="{{ $Auth['phone_login'] }}" selected="">
                                                    {{ $Auth['phone_login'] }}</option>
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-4 pl-5">
                                    <div>
                                        <h4 class="font-semibold mb-2"> Enable Google Login ?</h4>
                                        <div class="text-sm"> Allow users to create accounts in your site. </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <select name="google_login" class="shadow-none selectpicker with-border">
                                                <option value="{{ $Auth['google_login'] }}" selected="">
                                                    {{ $Auth['google_login'] }}</option>
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-4 pl-5 space-x-2">
                                    <div>
                                        <h4 class="font-semibold mb-2"> Auto Username On Register ?</h4>
                                        <div class="text-sm"> Registration form will not ask username.
                                        </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <select name="auto_username" class="shadow-none selectpicker with-border">
                                                <option value="{{ $Auth['auto_username'] }}" selected="">
                                                    {{ $Auth['auto_username'] }}</option>
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center p-4 pl-5 space-x-2">
                                    <div>
                                        <h4 class="font-semibold mb-2"> Allow Commenting </h4>
                                        <div>Enable/Disable Comments for Videos/Course </div>
                                    </div>
                                    <div class="switches-list">
                                        <div class="switch-container">
                                            <select name="commenting" class="shadow-none selectpicker with-border">
                                                <option value="{{ $Auth['commenting'] }}" selected="">
                                                    {{ $Auth['commenting'] }}</option>
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Update</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="w-full mx-auto mt-2">

                <div class="shadow bg-white rounded-md">

                    <h3 class="border-b py-4 px-6 text-base font-semibold"> Social Login </h3>

                    @if ($errors->any())
                        <div class="bg-yellow-50 border border-yellow-100 lg:mb-0 m-4 md:m-7 mt-1 p-4 relative rounded-md shadow-sm text-yellow-600 uk-alert"
                            uk-alert>
                            <a class="uk-alert-close absolute right-0 top-0 m-5" uk-close></a>
                            <h3 class="text-lg font-semibold text-yellow-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </h3>
                            <p class="text-yellow-600 mt-1 "></p>
                        </div>
                    @endif

                    <div class="p-6">
                        <form method="POST" action="{{ route('SocialLoginUpdate') }}">
                            @csrf
                            <div class="grid sm:grid-cols-5 align-items-start sm:gap-6 gap-2 md:mt-4 md:gap-y-10">

                                <!-- Facebook Login -->
                                <div class="text-4xl text-indigo-500 sm:block hidden">
                                    <ion-icon name="logo-facebook" class="border p-2.5 rounded-md shadow-sm"></ion-icon>
                                </div>
                                <div class="col-span-4 flex items-baseline justify-between sm:space-x-12 space-x-6">
                                    <div class="space-y-2">
                                        <h3 for="social_info" class="font-semibold text-base">Facebook Login </h3>
                                        <p class="leading-6 text-gray-500 text-sm">Enable the ability for users to login to
                                            your site using their accounts on the Facebook .</p>
                                        <div class="space-y-2" id="show_facebook_config" hidden>
                                            <input type="text" id="social_info" name="Facebook_Application_ID"
                                                class="shadow-none with-border"
                                                value="{{ $SocialLogin['Facebook_Application_ID'] }}"
                                                placeholder="Facebook_Application_ID">
                                            <input type="text" id="social_info" name="Facebook_Application_Secret"
                                                class="shadow-none with-border"
                                                value="{{ $SocialLogin['Facebook_Application_Secret'] }}"
                                                placeholder="Facebook_Application_Secret">
                                            <input type="text" id="social_info" name="Facebook_CALLBACK_URL"
                                                class="shadow-none with-border"
                                                value="{{ $SocialLogin['Facebook_CALLBACK_URL'] }}"
                                                placeholder="Facebook_CALLBACK_URL">
                                        </div>
                                    </div>

                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input name="FACEBOOK_LOGIN" unchecked type="checkbox"><span
                                                    class="switch-button"
                                                    uk-toggle="target: #show_facebook_config ;animation: uk-animation-fade"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <!-- Google+ Login -->
                                <div class="text-4xl text-red-500 sm:block hidden">
                                    <i class="icon-brand-google-plus border p-2.5 rounded-md shadow-sm"></i>
                                </div>
                                <div class="col-span-4 flex items-baseline justify-between sm:space-x-12 space-x-6">

                                    <div class="space-y-2">
                                        <h3 for="social_info" class="font-semibold text-base">Google+ Login </h3>
                                        <p class="leading-6 text-gray-500 text-sm">Enable the ability for users to
                                            login to
                                            your site using their Google+ account, (App requires reviewing)</p>
                                        <div class="space-y-2" id="show_google_config" hidden>
                                            <input type="text" id="social_info"
                                                value="{{ $SocialLogin['GOOGLE_CLIENT_ID'] }}"name="GOOGLE_CLIENT_ID"class="shadow-none with-border"
                                                placeholder="GOOGLE_CLIENT_ID">
                                            <input type="text" id="social_info"
                                                value="{{ $SocialLogin['GOOGLE_CLIENT_SECRET'] }}"
                                                name="GOOGLE_CLIENT_SECRET" class="shadow-none with-border"
                                                placeholder="GOOGLE_CLIENT_SECRET">
                                            <input type="text" id="social_info" unchecked
                                                value="{{ $SocialLogin['GOOGLE_CALLBACK_URL'] }}"
                                                name="GOOGLE_CALLBACK_URL"class="shadow-none with-border"
                                                placeholder="GOOGLE_CALLBACK_URL">
                                        </div>

                                    </div>

                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch"><input id="GOOGLE_LOGIN" name="GOOGLE_LOGIN"
                                                    type="checkbox"><span class="switch-button"
                                                    uk-toggle="target: #show_google_config ;animation: uk-animation-fade"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('extra_scripts')
    <x-error :errors="$errors"></x-error>
    <script>
        var facebook = document.getElementById("FACEBOOK_LOGIN");
        var google = document.getElementById("GOOGLE_LOGIN");

        if (!google.checked || !facebook.checked) {
            @if (isset($SocialLogin['GOOGLE_LOGIN']))
                google.click();
                document.querySelector("#show_google_config").removeAttribute("hidden");
            @endif
            @if (isset($SocialLogin['FACEBOOK_LOGIN']))
                facebook.click();
                dcument.querySelector("#show_facebook_config").removeAttribute("hidden");
            @endif
        }
    </script>
@endsection
