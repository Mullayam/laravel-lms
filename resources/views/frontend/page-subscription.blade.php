@php
if (empty($courseid)) {
   $courseid =  Date('Ymdhis');
};
    $oid = "$courseid-".rand(1111111,9999999);
@endphp
@extends('layouts.main')
@section('extra_style')
    <style>
        /*General Styles*/
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');


        .pricing-header {
            max-width: 700px;
        }

        /*Print and Online Page Styles*/

        .stepwizard-step p {
            margin-top: 10px;
            color: #086495;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: ' ';
            width: 100%;
            height: 2px;
            background-color: #086495;
        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }


        h3 {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
        }
    </style>
    <script>
        var payment_method = document.getElementById('step-1');
        var online = document.getElementById('Online/PayTM');
        var offline = document.getElementById('Offline/Manual');
        offline.style.display = payment_method.value == 'offline' ? 'block' : 'none';

        function displayPayment() {
            var pay_method = document.getElementById('billing_cycle');
            var divm = document.getElementById('monthly-payment');
            var divy = document.getElementById('yearly');
            var divu = document.getElementById('manual-upi');
            divm.style.display = pay_method.value == 'Monthly' ? 'block' : 'none';
            divy.style.display = pay_method.value == 'Yearly' ? 'block' : 'none';
        }
    </script>
@endsection
@section('main')
    <div class="container">
        <div class="max-w-3xl mx-auto">
            <h1 class="font-semibold mb-4 text-lg"> Upgrade Membership </h1>


            <div  class="bg-white rounded-md shadow-md mt-2" id='step-1'>

                <div class='row setup-content'>
                    <div class='col-lg px-5 py-3'>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <label for="checkout-fn" class="text-sm font-medium">
                                <h3><b> Choose Billing Cycle</b></h3>
                            </label>
                            <select id='billing_cycle' onchange='displayPayment()' class="selectpicker">
                                <option value='' selected><b>Select One</b></option>
                                <option value='Monthly'><b>Monthly</b></option>
                                <option value='Yearly'><b>Yearly</b></option>

                            </select>
                        </div>
                    </div>
                </div>
                <P onclick="UIkit.notification({message: 'UPI -> enjoys-in@jio'})"
                    class="text-sm font-medium p-3 text-red-500">If you're enable to pay via Paytm,Please
                    Pay directly to our UPI <B style="text-decoration:underline;">enjoys-in@jio</B></P>
            </div>


            <div class='row'>
                <div class="container lg">
                    <div id='monthly-payment' class='payment' style='display:none'>
                        <form class="p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" method='POST'
                            action="{{route('paytm.payment')}}">
                              @csrf
                            <div class='form-group owner'>
                                <label for='owner'><b>Monthly Payable Amount</b></label>
                                <input class="uk-input" type="number" name="TXN_AMOUNT"
                                    value="{{$price['MonthlyPrice']}}" readonly required>
                                <input id="ORDER_ID" name="ORDER_ID" value="{{$oid}}" hidden>
                                <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="{{auth()->user()->username}}" hidden>
                                <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden>
                                <input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB" hidden>


                            </div>
                            <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                                <button name="payme"
                                    class="bg-blue-600 flex font-medium items-center justify-center py-3 rounded-md text-white"
                                    type="submit"><B>Pay {{$price['MonthlyPrice']}}</B></button>
                            </div>
                        </form>
                    </div>

                    <div id='yearly' class='payment' style='display:none'>
                        <form class="p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" method='POST'
                            action="{{route('paytm.payment')}}">
                            @csrf
                            <div class='form-group'>
                                <label for='bankaccount'><b>Yearly Payable Amount</b></label>
                                <input class="uk-input" type="number" name="TXN_AMOUNT"                                     value="{{$price['YearlyPrice']}}" readonly>
                                <input id="ORDER_ID" name="ORDER_ID" value="{{$oid}}" hidden>
                                <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="{{auth()->user()->username}}" hidden>
                                <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"hidden>
                                <input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB" hidden>

                            </div>
                            <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                                <button name="pay" 0
                                    class="bg-purple-600 flex font-medium items-center justify-center py-3 rounded-md text-white"
                                    type="submit"><B>Pay {{$price['YearlyPrice']}}</B></button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            {{-- <div class='payment'>
                <div class="bg-white rounded-md shadow-md">
                    <div class="card px-2 py-5">
                        <h1 class="heading text-semibold"> You Can Directly Pay to UPI <B
                                class="text-blue-600">enjoys-in@jio</B>.<BR> If you already Made The Payment, Then Please
                            Enter UPI REFERENCE no</h1>
                        <form class="p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" method='POST'>
                            <div class='form-group' id='bankacct'>
                                <label for='bankaccount'><b>Yearly Payable Amount</b></label>
                                <input class="uk-input" type="number" name="TXN_AMOUNT" placeholder="Amount You Paid"
                                    required><BR>
                                <input class="uk-input" type="text" name="refno" placeholder="Ref. No"
                                    required><BR>
                                <input class="uk-input" type="text" name="contact" placeholder="Email/Username/Phone"
                                    required><BR>
                            </div>
                            <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                                <button name="submit"
                                    class="bg-yellow-600 flex font-medium items-center justify-center py-3 rounded-md text-white"
                                    type="submit"><B>Submit</B></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}


            <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                <a class="bg-gray-200 flex font-medium items-center justify-center py-3 rounded-md" href="./">
                    <i class="icon-feather-chevron-left mr-1"></i>
                    <span class="md:block hidden">Back</span><span class="md:hidden block">Back</span>
                </a>

            </div>

        </div>


    </div>
@endsection
