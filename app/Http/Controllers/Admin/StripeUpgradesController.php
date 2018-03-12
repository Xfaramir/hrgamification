<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\StripeTransaction;
use App\Http\Controllers\Controller;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

/**
*
*/
class StripeUpgradesController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.stripe_upgrades.index');
    }

    public function store(Request $request)
    {
        $this->createStripeCharge($request);

        $transaction = StripeTransaction::create([
            'amount' => 19.99,
            'transaction_user_id' => Auth::id()
        ]);

        $user = User::where('id', Auth::id())
            ->update([
                'premium' => 1
            ]);

        return redirect()->back()->with('success', 'Payment completed successfully.');
    }

    public function createStripeCharge($request)
    {
        Stripe::setApiKey(env('STRIPE_API_KEY'));

        try {
            $customer = Customer::create([
                'email' => $request->get('stripeEmail'),
                'source'  => $request->get('stripeToken')
            ]);

            $charge = Charge::create([
                'customer' => $customer->id,
                'amount' => 1999,
                'currency' => "usd"
            ]);
        } catch (\Stripe\Error\Base $e) {
            return redirect()->back()->withError($e)->send();
        }
    }
}
