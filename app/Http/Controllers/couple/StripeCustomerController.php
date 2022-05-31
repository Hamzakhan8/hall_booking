<?php

namespace App\Http\Controllers\couple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeCustomerController extends Controller
{
    /**
     * Creates a new Stripe Customer instance into the database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stripe_customer($customer, $request)
    {
        $user = $request->user();

        $user->stripe_customer()
        ->create([
            'user_id' => $user->id,
            'customer_id' => $customer->id,
            'address' => $user->profile->address,
            'email' => $user->email,
            'phone' => $user->profile->contact,
        ]);
    }
}
