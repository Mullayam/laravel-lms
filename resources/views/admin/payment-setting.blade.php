@extends('layouts.admin')
@section('admin_content')
<!-- Setup payment informations -->
        <div>

            <h3 class="text-2xl font-medium mb-5"> Setup payment informations </h3>

            <div class="grid lg:grid-cols-2 gap-8">

                <!-- column 1-->
                <div class="space-y-8">

                    <!-- setup Payple  -->
                    <div class="bg-white rounded-md lg:shadow-md shadow">
                       <form method="POST" action="{{route('PaymentSettingUpdate')}}">
                         <h3 class="border-b py-4 px-6 font-semibold"> SETUP PAYTM SETTINGS </h3>
                        <div class="-space-y-5">
                            @csrf
                            <div class="p-6">
                                <label for="payple_status" class="text-sm"> Active . </label>
                                <select id="payple_status" name="paytm_status"
                                    class="shadow-none selectpicker with-border" required>
                                    <option value="{{$payment['paytm_status']}}"> {{$payment['paytm_status']}} </option>
                                    <option value="Enable"> Enable </option>
                                    <option value="Disable"> Disable </option>
                                </select>
                            </div>
                            <div class="p-6">
                                <label for="paypal_mode" class="text-sm"> Mode . </label>
                                <select id="paypal_mode" name="PAYTM_ENVIRONMENT" class="shadow-none selectpicker with-border"
                                    required>
                                    <option value="{{$payment['PAYTM_ENVIRONMENT']}}" > {{$payment['PAYTM_ENVIRONMENT']}} </option>
                                    <option value="TEST" > Dev/Local </option>
                                    <option value="PROD"> Production </option>
                                </select>
                            </div>

                            <div class="p-6">
                                <label for="Sandbox_id" class="font-medium"> Merchant ID (MID)</label>
                                <input type="text" id="Sandbox_id" name="PAYTM_MERCHANT_MID" class="shadow-none with-border"
                                    value="{{$payment['PAYTM_MERCHANT_MID']}}" required="">
                            </div>
                            <div class="p-6">
                                <label for="Sandbox_production" class="font-medium"> Merchant Key </label>
                                <input type="text" id="Sandbox_production" name="PAYTM_MERCHANT_KEY"
                                    class="shadow-none with-border" value="{{$payment['PAYTM_MERCHANT_KEY']}}" required="">
                            </div>
                            <div class="p-6">
                                <label for="Sandbox_production" class="font-medium"> Website Type </label>
                                <input type="text" id="Sandbox_production" name="PAYTM_MERCHANT_WEBSITE"
                                    class="shadow-none with-border" value="{{$payment['PAYTM_MERCHANT_WEBSITE']}}" >
                            </div>
                            <button class="btn" type="submit"> Save </button>
                        </div>

                       </form>
                    </div>

                    <!--  stripe Stripe  -->
                    <div class="bg-white rounded-md lg:shadow-md shadow">
                        <h3 class="border-b py-4 px-6 font-semibold"> SETUP STRIPE SETTINGS </h3>
                        <div class="-space-y-5">

                            <div class="p-6">
                                <label for="stripe_status" class="text-sm"> Active . </label>
                                <select id="stripe_status" name="stripe_status"
                                    class="shadow-none selectpicker with-border" required>
                                    <option value="Anable"> Anable </option>
                                    <option value="Disable"> Disable </option>
                                </select>
                            </div>
                            <div class="p-6">
                                <label for="stripe_mode" class="text-sm"> Mode . </label>
                                <select id="stripe_mode" name="stripe_mode" class="shadow-none selectpicker with-border"
                                    required>
                                    <option value="Sandbox"> Sandbox </option>
                                    <option value="Production"> Production </option>
                                </select>
                            </div>
                            <div class="p-6">
                                <label for="stripe_currency" class="text-sm"> Stripe currency . </label>
                                <select id="stripe_currency" name="stripe_currency"
                                    class="shadow-none selectpicker with-border" required>
                                    <option value="">Select Stripe currency</option>
                                    <option value="ALL"> ALL </option>
                                    <option value="USD"> USD </option>
                                    <option value="AFN"> AFN </option>
                                    <option value="ARS"> ARS </option>
                                    <option value="AWG"> AWG </option>
                                    <option value="AUD"> AUD </option>
                                </select>
                            </div>
                            <div class="p-6">
                                <label for="stripe_id" class="font-medium"> Client id (Sandbox)</label>
                                <input type="text" id="stripe_id" name="stripe_id" class="shadow-none with-border"
                                    value="" required="">
                            </div>
                            <div class="p-6">
                                <label for="stripe_production" class="font-medium"> Client id (Production)</label>
                                <input type="text" id="stripe_production" name="stripe_production"
                                    class="shadow-none with-border" value="" required="">
                            </div>

                        </div>
                    </div>

                </div>

                <!-- column 2-->
                <div class="space-y-8">

                    <!-- notification -->
                    <div class="bg-blue-100 border border-blue-200 p-4 relative rounded-md shadow-sm uk-alert"
                        uk-alert="">
                        <a class="uk-alert-close absolute right-0 top-0 m-5 text-blue-600" uk-close></a>
                        <h3 class="text-lg font-semibold text-blue-500">Remember</h3>
                        <p class="text-blue-700 mt-1 ">Please make sure that "System currency", "PayTM currency" are same.</p>
                    </div>

                    <!-- system currency -->
                    <div class="bg-white rounded-md lg:shadow-md shadow">
                        <h3 class="border-b py-4 px-6 font-semibold"> SYSTEM CURRENCY </h3>
                        <div class="-space-y-5">
                            <form method="POST" class="px-5 py-3">
                                 <div class="p-6">
                                <label for="system_currency" class="text-sm"> Set your site System currency . </label>
                                <select id="system_currency" name="system_currency"
                                    class="shadow-none selectpicker with-border" required>
                                    <option  disabled>Select system currency</option>
                                    <option value="ALL"> ALL </option>
                                    <option value="USD" selected> USD </option>
                                    <option value="INR"> RS </option>

                                </select>

                            </div>
                            <div class="p-6">
                                <label for="system_align_currency" class="text-sm"> Currency Align position . </label>
                                <select id="system_align_currency" name="system_align_currency"
                                    class="shadow-none selectpicker with-border" required>
                                    <option disabled>Select system currency</option>
                                    <option value="Left"> Left </option>
                                    <option value="Right"> Right </option>
                                </select>

                            </div>
                            <button type="submit" class="btn">Save</button>
                            </form>


                        </div>
                    </div>
                </div>

            </div>


        </div>
@endsection
@section('extra_scripts')
@if(Session::has('failure'))
<script>
    UIkit.notification({message:
    '<div class=\'flex\'><div class=\'text-red-600\'>  {{Session::get("failure")}}</div> </div>',
    pos:"center"})
</script>
@elseif (Session::has('success'))
<script>
    UIkit.notification({message:
    '<div class=\'flex\'> <div class=\'text-green-600 \'> {{Session::get("success")}} </div>  </div>',
    pos:"center"})
</script>
@endif
@endsection
