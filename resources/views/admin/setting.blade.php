@extends('layouts.admin')
@section('admin_content')
    <div class="container ">

            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl font-medium mb-5"> General Setting </h3>
                <!-- Item description -->
                @if (Session::has('failure'))
                    <x-alert bg="green-500" type="Success">Website Information Updated Successfully</x-alert>
                @endif
                <div class="shadow bg-white rounded-md">

                    <h3 class="border-b py-4 px-6 text-base font-semibold"> Name & Description </h3>

                    <div class="p-6">

                        <form action="{{route('WebInfoUpdate')}}" method="POST" class="grid sm:grid-cols-3 align-items-baseline sm:gap-6 gap-2 md:mt-4">
                            @csrf
                            <!-- Website title -->
                            <label for="system_info" class="font-medium">Website title<span
                                    class="text-red-600">*</span></label>
                            <div class="col-span-2">
                                <input type="text" id="system_info" name="web_title" value="{{ $get['web_title']}}" class="shadow-none with-border"
                                    value="Title" required="">
                                <p class="mt-2 text-sm text-gray-500">Your website general title, it will appear on Google
                                    and on your browser tab.</p>
                            </div>

                            <!-- Website name  -->
                            <label for="system_info" class="font-medium">Website name<span
                                    class="text-red-600">*</span></label>
                            <div class="col-span-2">
                                <input type="text" id="system_info" name="web_name" class="shadow-none with-border"
                                    value="{{ $get['web_name']}}" required="">
                                <p class="mt-2 text-sm text-gray-500"> Your website name, it will on website's footer and
                                    E-mails.</p>
                            </div>

                            <!-- Website logo  -->
                            <label for="system_info" class="font-medium">Website Logo </label>
                            <div class="col-span-2 flex py-2 space-x-5">
                                <img src="{{ $get['web_logo']}}" alt=""
                                    class="h-16 rounded-full w-16">
                                <div class="border font-medium px-3 py-1.5 rounded-md self-center shadow-sm text-center text-sm"
                                    uk-form-custom>
                                    <input type="file" name="web_logo"> Change
                                </div>
                            </div>

                            <!-- Website description  -->
                            <label for="system_info" class="font-medium self-start"> Website Description </label>
                            <div class="col-span-2">
                                <textarea class="with-border col-span-2 p-4" id="system_info" name="web_seo" type="text">{{ $get['web_seo']}}</textarea>
                                <p class="mt-2 text-sm text-gray-500"> Your website's description, used mostly for SEO and
                                    search engines, Max of 100 characters is recommended</p>
                            </div>

                            <!-- Website keywords -->
                            <label for="system_info" class="font-medium"> Website Website keywords </label>
                            <div class="col-span-2 keywords-container py-2">
                                <div class="keyword-input-container">
                                    <input type="text" class="keyword-input with-border" value="{{ $get['keywords']}}" name="keywords" placeholder="Add Keywords" />

                                </div>
                            </div>

                            <!-- Item name -->
                            <label for="student_email_verification" class="font-medium self-center"> Student email
                                verification </label>
                            <select class="selectpicker border rounded-md col-span-2" name="student_email_verification"
                                id="student_email_verification">
                                <option value="{{ $get['web_title']}}" selected>{{ $get['student_email_verification']}}</option>
                                <option value="enable" >Enable</option>
                                <option value="disable" >Disable</option>
                            </select>
                            <button type="submit">Save</button>
                        </form>

                    </div>

                </div>
            </div>




    </div>
@endsection
