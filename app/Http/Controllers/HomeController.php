<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $productData = DB::table('products')->get();
        return View::make("home", compact('productData'));
    }

    public function initiatpayment(Request $request)
    {  
        $price = Crypt::decryptString($request->price);
        $intent = auth()->user()->createSetupIntent();
        return View::make("home", compact('price',"intent"));
    }

    public function processPayment(Request $request){
        $user = auth()->user();
        $price = Crypt::decryptString($request->input('price'));
        $paymentMethod = $request->input('payment_method');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        try
        {
        $user->charge($price * 100, $paymentMethod,['off_session' => true, 'description' => 'purchase']);
        }
        catch (\Exception $e)
        { 
        return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }
        session()->put('success', 'successfully purchased');
        return redirect('home');
    }
}
