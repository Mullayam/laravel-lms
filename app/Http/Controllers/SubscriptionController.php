<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;

class SubscriptionController extends Controller
{
    public function index($get_plan,$course_id ="")
    {
        $plans = ["BASIC","PRO","PAY_AS_YOU_GO","BUNDLE"];

        if(in_array("$get_plan", $plans))
        {
            $price = $this->GetPrice($get_plan);
            return view('frontend.page-subscription',
            ['planName'=>$get_plan,'price'=>$price,'courseid'=>$course_id]);
        }
       return redirect()->route('Pricing')->with('failure');
    }



    public function paytmPayment(Request $request)
    {
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
            'order' => $request->ORDER_ID,
            'user' => auth()->user()->username,
            'mobile_number' => '123456789',
            'email' => auth()->user()->email,
            'amount' => $request->TXN_AMOUNT,
            'callback_url' => route('paytm.callback'),
        ]);

        return $payment->receive();
    }

    public function paytmCallback()
    {
        dd(PaytmWallet::with('receive'));
        $transaction = PaytmWallet::with('receive');

        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm

        if ($transaction->isSuccessful()) {
            //Transaction Successful
            return redirect()->route('studentTxn', ['username' => auth()->user()->username]);
        } else if ($transaction->isFailed()) {
            //Transaction Failed
            return redirect()->route('studentTxn', ['username' => auth()->user()->username]);
        } else if ($transaction->isOpen()) {
            //Transaction Open/Processing
            return redirect()->route('studentTxn', ['username' => auth()->user()->username]);
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }

    public function paytmPurchase()
    {
        return redirect()->route('studentTxn',['username'=>auth()->user()->username]);
    }
    // public function statusCheck()
    // {
    //     $status = PaytmWallet::with('status');
    //     $status->prepare(['order' => $order->id]);
    //     $status->check();

    //     $response = $status->response(); // To get raw response as array
    //     //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=txn-status-api-description

    //     if ($status->isSuccessful()) {
    //         //Transaction Successful
    //     } else if ($status->isFailed()) {
    //         //Transaction Failed
    //     } else if ($status->isOpen()) {
    //         //Transaction Open/Processing
    //     }
    //     $status->getResponseMessage(); //Get Response Message If Available
    //     //get important parameters via public methods
    //     $status->getOrderId(); // Get order id
    //     $status->getTransactionId(); // Get transaction id
    // }
    // public function refund()
    // {
    //     $refund = PaytmWallet::with('refund');
    //     $refund->prepare([
    //         'order' => $order->id,
    //         'reference' => "refund-order-4", // provide refund reference for your future reference (should be unique for each order)
    //         'amount' => 300, // refund amount
    //         'transaction' => $order->transaction_id // provide paytm transaction id referring to this order
    //     ]);
    //     $refund->initiate();
    //     $response = $refund->response(); // To get raw response as array

    //     if ($refund->isSuccessful()) {
    //         //Refund Successful
    //     } else if ($refund->isFailed()) {
    //         //Refund Failed
    //     } else if ($refund->isOpen()) {
    //         //Refund Open/Processing
    //     } else if ($refund->isPending()) {
    //         //Refund Pending
    //     }
    // }

    // public function refund()
    // {
    //     $refundStatus = PaytmWallet::with('refund_status');
    //     $refundStatus->prepare([
    //         'order' => $order->id,
    //         'reference' => "refund-order-4", // provide reference number (the same which you have entered for initiating refund)
    //     ]);
    //     $refundStatus->check();

    //     $response = $refundStatus->response(); // To get raw response as array

    //     if ($refundStatus->isSuccessful()) {
    //         //Refund Successful
    //     } else if ($refundStatus->isFailed()) {
    //         //Refund Failed
    //     } else if ($refundStatus->isOpen()) {
    //         //Refund Open/Processing
    //     } else if ($refundStatus->isPending()) {
    //         //Refund Pending
    //     }
    // }

    public function GetPrice(string $planName):array
    {
        switch ($planName) {
            case 'BASIC':
                return $Price =['MonthlyPrice' =>11.4,'YearlyPrice'=>99.40];
                break;
            case 'PRO':
                return $Price = ['MonthlyPrice' => 11.4, 'YearlyPrice' => 99.40];
                break;
            case 'PAY_AS_YOU_GO':
                return $Price = ['MonthlyPrice' => 29.4, 'YearlyPrice' => 129.40];
                break;
            case 'BUNDLE':
                return $Price = ['MonthlyPrice' => 99.4, 'YearlyPrice' =>false];
                break;
            default:
                return false;
                break;
        }
    }
}
