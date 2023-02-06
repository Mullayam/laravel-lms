@extends('layouts.admin')
@section('admin_content')
    <div class="container">

        <div class="lg:w-11/12 mx-auto">

            <div class="flex items-center mb-10">
                <a href="#" class="-ml-2 inline-flex p-1.5 text-xl">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </a>
                <h3 class="font-semibold md:text-xl text-lg"> Create New Course </h3>
            </div>

            <div class="bg-white rounded-md shadow">

                <h3 class="px-8 pt-5 mb-2 text-lg font-semibold"> Course Adding Form</h3>

                <div class="z-20 bg-white overflow-hidden border-b"
                    uk-sticky="cls-active:shadow rounded-none ;media 992; offset:67;bottom:true">
                    <nav class="cd-secondary-nav extanded px-6">
                        <ul class="space-x-3" uk-switcher="connect: #form_tabs; animation: uk-animation-fade">
                            <li><a href="#course_basic">
                                    <ion-icon name="document-text-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>
                                    Basic
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="help-circle-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>
                                    Required
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="card-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>Pricing
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="film-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>Media
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="globe-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>SEO
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="checkmark-circle-outline" class="pr-2 text-2xl lg:block hidden">
                                    </ion-icon>Finish
                                </a></li>
                        </ul>
                    </nav>
                </div>

                <form class="uk-switcher" action="{{ route('createCourse') }}" id="form_tabs" method="POST">

                    <!-- Basic  -->
                    <div class="p-8" id="course_basic">
                       @csrf
                        <div class="grid sm:grid-cols-3 align-items-baseline sm:gap-6 gap-2 md:mt-4">

                            <!-- Course title -->
                            <label for="course_basic" class="font-medium"> Course Name <span
                                    class="text-red-600">*</span></label>
                            <div class="col-span-2">
                                <input type="text" id="course_basic" name="course_name" class="shadow-none with-border"
                                    placeholder="Enter course title" required="">
                            </div>

                            <!-- Course short description  -->
                            <label for="course_basic" class="font-medium self-start"> Short description </label>
                            <div class="col-span-2">
                                <textarea class="with-border col-span-2 p-4 min-h-full resize-none" id="course_basic" name="short_description"
                                    type="text" rows="2" value=""></textarea>
                                <p class="mt-2 text-sm text-gray-500"> Brief description for your course max 100 letter</p>
                            </div>

                            <!-- Course description  -->
                            <label for="course_basic" class="font-medium"> Course description </label>
                            <div class="col-span-2">
                                <textarea class="with-border col-span-2 p-4" id="course_basic" name="description" type="text" value=""></textarea>
                            </div>

                            <!-- Course tags -->
                            <label for="course_basic" class="font-medium"> Course tags </label>
                            <div class="col-span-2 keywords-container py-2">
                                <div class="keyword-input-container">
                                    <input type="text" name="tags" class="keyword-input with-border"
                                        placeholder="Add Keywords sepated with commas" />

                                </div>
                                <div class="keywords-list">


                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <!-- Course name -->
                            <label for="course_basic" class="font-medium self-center">Category <span
                                    class="text-red-600">*</span> </label>
                            <select class="selectpicker border rounded-md col-span-2" name="course_category"
                                id="course_basic">
                                <option value="all" disabled>All</option>
                                <optgroup label="New">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }} </option>
                                    @endforeach

                                </optgroup>

                            </select>

                            <!-- Course Level -->
                            <label for="course_basic" class="font-medium self-center"> Level <span
                                    class="text-red-600">*</span> </label>
                            <select class="selectpicker border rounded-md col-span-2" name="course_level" id="course_basic">
                                <option value="beginner">Beginner</option>
                                <option value="advanced">Advanced</option>
                                <option value="intermediate">Intermediate</option>
                            </select>

                            <!-- Course Language -->
                            <label for="course_basic" class="font-medium self-center">Language made in </label>
                            <select class="selectpicker border rounded-md col-span-2" name="course_language"
                                id="course_basic">
                                <option value="hindi" selected="">Hindi</option>
                                <option value="english">English</option>
                            </select>


                        </div>

                    </div>

                    <!-- Requirements  -->
                    <div class="p-8 md:w-3/4 mx-auto">

                        <div class="flex items-center justify-between space-x-2 mb-7">
                            <div>
                                <h4 class="font-semibold mb-1 text-lg">Requirements</h4>
                                <div class="text-sm"> List of requirements that can be set for this course </div>
                            </div>

                        </div>

                        <div class="grid sm:grid-cols-4 align-items-center sm:gap-6 gap-2 md:mt-4">
                            <label for="course_basic" class="font-medium">Links(PDF/Group) </label>
                            <div class="col-span-3 space-y-4">
                                <input type="text" id="requirements" name="links"
                                    class="shadow-none with-border"></textarea>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-4 align-items-center sm:gap-6 gap-2 md:mt-4">
                            <label for="course_basic" class="font-medium">What We Learn</label>
                            <div class="col-span-3 space-y-4">
                                <textarea type="text" id="requirements" name="indexlist" class="shadow-none with-border p-2"></textarea>
                            </div>
                        </div>


                    </div>

                    <!-- Pricing  -->
                    <div class="p-8 w-4/5 mx-auto py-12 md:space-y-10 space-y-4">
                        <div>
                            <div class="flex items-center justify-between space-x-2 mb-5">
                                <div>
                                    <h4 class="font-semibold mb-2 text-base">Check if this is a free course</h4>
                                    <div class="text-sm"> Set the price for this course or let the student register for
                                        free. </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox" id="changePrice" checked><span
                                                class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-3 align-items-baseline sm:gap-6 gap-2" id="showPrice">
                                <!-- Website title -->
                                <label for="course_basic" class="font-medium"> Course price (Rs.) </label>
                                <div class="col-span-2">
                                    <input type="number" id="course_basic" name="price"
                                        class="shadow-none with-border" value="0">
                                </div>

                            </div>
                        </div>
                        <div id="showDiscount">

                            <div class="flex items-center justify-between space-x-2 mb-5">
                                <div>
                                    <h4 class="font-semibold mb-2 text-base"> Check if this course has discount<span
                                    class="text-red-600">*</span></label></h4>
                                    <div class="text-sm"> This course has 0% Discount </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox" name="check_discount"  id="changeDiscount"><span
                                                class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-3 align-items-baseline sm:gap-6 gap-2">

                                <label for="course_basic" class="font-medium">Discounted price (Rs.) </label>
                                <div class="col-span-2">
                                    <input type="number" id="course_basic" name="course_discount"
                                        class="shadow-none with-border" value="Title" value="0">
                                </div>

                            </div>

                        </div>
                        <div>

                            <div class="flex items-center justify-between space-x-2 mb-5">
                                <div>
                                    <h4 class="font-semibold mb-2 text-base">Sale type</h4>
                                    <div class="text-sm"> How do you want students to be registered </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Website title -->
                            <div class="border divide-y rounded-md">
                                <div class="radio p-5 w-full">
                                    <input id="price-discount-1" name="sale_type" type="radio" value="subscription"
                                        checked>
                                    <label for="price-discount-1" class="font-semibold"><span class="radio-label"></span>
                                        Subscriptions</label>
                                    <p class="text-gray-500 text-sm mt-1.5 ml-7"></p>
                                </div>
                                <br>
                                <div class="radio p-5 w-full">
                                    <input id="price-discount-2" name="sale_type" type="radio" value="selling">
                                    <label for="price-discount-2" class="font-semibold"><span class="radio-label"></span>
                                        Selling </label>
                                    <p class="text-gray-500 text-sm mt-1.5 ml-7"></p>
                                </div>
                                <br>
                                <div class="radio p-5 w-full">
                                    <input id="price-discount-3" name="sale_type" type="radio" value="bundle">
                                    <label for="price-discount-3" class="font-semibold"><span class="radio-label"></span>
                                        Bundle </label>
                                    <p class="text-gray-500 text-sm mt-1.5 ml-7"></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Media  -->
                    <div class="p-8 w-4/5 mx-auto py-12 space-y-5">
                        <div class="grid sm:grid-cols-3 align-items-baseline sm:gap-6 gap-2 md:mt-4">

                            <!-- Course provider -->
                            <label for="course_media" class="font-medium self-center">Course overview provider <span
                                    class="text-red-600">*</span></label></label>
                            <select class="selectpicker border rounded-md col-span-2" name="course_type"
                                id="course_basic">
                                <option value="defence">DEFENCE</option>
                                <option value="banking">BANKING</option>
                                <option value="upsc">UPSC</option>
                                <option value="ssc" selected>SSC</option>
                                <option value="school">10/11/12th School</option>
                            </select>
                            <!-- Course length url -->
                            <label for="course_media" class="font-medium">Course Length (in Hours) <span
                                    class="text-red-600">*</span></label></label>
                            <div class="col-span-2">
                                <input type="number" id="course_media" name="course_length"
                                    class="shadow-none with-border" required="">
                            </div>
                            <!-- Course lesssion url -->
                            <label for="course_media" class="font-medium">Total Lessions <span
                                    class="text-red-600">*</span></label></label>
                            <div class="col-span-2">
                                <input type="text" id="course_media" name="course_lessions"
                                    class="shadow-none with-border" required="">
                            </div>
                            <!-- Course thumbnail url -->

                            <label for="course_media" class="font-medium">Course thumbnail url <span
                                    class="text-red-600">*</span></label></label>
                            <div class="col-span-2">
                                <input type="text" id="course_media" name="course_thumbnail"
                                    class="shadow-none with-border" required="">
                            </div>
                            <!-- featured Course  url -->
                            <label for="course_media" class="font-medium">Featured </label>
                            <div class="col-span-2">
                                <div class="switch-container">
                                    <label class="switch"><input type="checkbox" name="is_featured"><span
                                            class="switch-button"></span>
                                    </label>
                                </div>
                            </div>



                        </div>


                    </div>

                    <!-- SEO  -->
                    <div class="p-8 w-4/5 mx-auto py-12 space-y-5">
                        <div class="grid sm:grid-cols-3 align-items-baseline sm:gap-6 gap-2 md:mt-4">

                            <!-- Meta keywords -->
                            <label for="course_meta" class="font-medium self-start"> Meta keywords </label>
                            <textarea class="with-border col-span-2 p-4 min-h-full resize-none" id="course_meta" name="course_meta"
                                type="text" rows="2" value=""></textarea>

                            <!-- Meta description  -->
                            <label for="course_description" class="font-medium self-start"> Meta description </label>
                            <div class="col-span-2 ">
                                <textarea class="with-border col-span-2 p-4" id="course_description" name="meta_description" type="text"
                                    value=""></textarea>
                                <p class="mt-2 text-sm text-gray-500"> Your website's description, used mostly for SEO and
                                    search engines, Max of 100 characters is recommended</p>
                            </div>

                        </div>

                    </div>

                    <!-- Finish  -->
                    <div class="max-w-sm mx-auto px-20 py-20 uk-active">
                        <div class="flex flex-col items-center justify-center">
                            <ion-icon name="checkmark-circle" class="hydrated mb-4 md text-5xl text-green-500"
                                role="img" aria-label="checkmark circle"></ion-icon>
                            <h6 class="font-semibold text-2xl mb-2"> Thank You</h6>
                            <h1 class="font-medium mb-6 text-gray-500"> Just One click away</h1>
                            <button type="submit"
                                class="bg-blue-600 px-4 py-2.5 font-medium rounded-md self-center text-center text-white w-full">
                                Submit
                            </button>
                        </div>

                    </div>

                </form>


            </div>

        </div>

    </div>
@endsection
@section('extra_scripts')
    <script>
        $(document).ready(function() {
            var priceTag = $('#changePrice').is(':checked');
            let PriceInput = $('#showPrice');
            let DiscountInput = $('#showDiscount');
            if (priceTag) {
                PriceInput.addClass("d-none");
                DiscountInput.addClass("d-none");
            }
            $("#changePrice").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'true');
                    PriceInput.addClass("d-none");
                    DiscountInput.addClass("d-none");
                } else {
                    $(this).attr('value', 'false');
                    PriceInput.removeClass("d-none");
                    DiscountInput.removeClass("d-none");
                }
            });
        });
    </script>
@endsection
