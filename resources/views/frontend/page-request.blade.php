@extends('layouts.main')
@section('main')
    <div class="container">
       <div class="text-center mt-2 mb-6 lg:mt-5">
                        <h1 class="font-semibold text-3xl md:text-3xl text-xl text-center uk-font-semibold text-3xl uk-heading-line">
                            <span>Request Here</span></h1>
                    </div>
        <div class="w-full mx-auto">

            <div class="shadow bg-white rounded-md">

                <h3 class="border-b flex font-semibold items-center justify-between px-7 py-5 text-base">


                    <div class="lg:p-8 p-5">
                        <form method="POST" class="grid sm:grid-cols-2 gap-x-6 gap-y-4 mt-4">
                            <div>
                                <label for="checkout-fn" class="text-sm font-medium"> First Name</label>
                                <input type="text" class="with-border " name="firstname" required>
                            </div>
                            <div>
                                <label for="checkout-fn" class="text-sm font-medium"> Last Name</label>
                                <input type="text" class="with-border" name="lastname" required>
                            </div>
                            <div>
                                <label for="checkout-fn" class="text-sm font-medium"> E-mail Address </label>
                                <input type="email" class="with-border" name="email" required>
                            </div>
                            <div>
                                <label for="checkout-fn" class="text-sm font-medium"> Phone Number</label>
                                <input type="text" class="with-border" name="phone">
                            </div>

                            <div>
                                <label for="checkout-fn" class="text-sm font-medium">Choose Category</label>
                                <select class="selectpicker with-border" name="type" required>
                                    <option selected value="Books">Books</option>
                                    <option value="PYP">PYP</option>
                                    <option value="Course">Course</option>
                                    <option value="Editorial">Editorial</option>
                                    <option value="Notes/PDF">Notes/PDF</option>
                                    <option value="Current Affairs">Current Affairs</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>


                            <div>
                                <label for="checkout-fn" class="text-sm font-medium">Enter Full Details If Link
                                    Available</label>
                                <textarea type="text" name="msg" class="with-border" required></textarea>
                            </div>

                            <div class="cols-span-2 checkbox my-2">
                                <input type="checkbox" id="use_points">
                                <label for="use_points" class="text-sm"><span class="checkbox-icon" required></span>
                                    I agree to the <a target="_blank" href="/Terms" class="font-semibold">Terms and
                                        Conditions</a> </label>
                            </div>
                            <button
                                class="bg-blue-600 text-white flex font-medium items-center justify-center py-3 rounded-md hover:text-white"
                                name="request" type="submit">
                                Request
                                <i class="icon-feather-chevron-right ml-1"></i>
                                </a>
                        </form>
                    </div>

            </div>




        </div>
    </div>
@endsection
