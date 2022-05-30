<?php

namespace  App\Traits;

trait StripeCustomer
{

    public function StripeCustomer($request)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        StripeStripe::setApiKey(env("STRIPE_SECRET"));

        $customer = \Stripe\Customer::create([
            'address' => [
                'line1' => $request->user()->address,
                'line2' => $request->user()->address,
            ],

            'email' => $request->user()->email,
            'name' => $request->user()->name,
            'phone' => $request->user()->phone,

        ]);

        $customer_id = $customer->id;

        return $this->StripeCharge($customer_id, $request);
    }
}
?>
