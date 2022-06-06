<?php

namespace  App\Traits;
use Stripe\Stripe as StripeStripe;

trait StripeCustomer
{

    /**
     * This function will make the stripe customer for every user
     * after registration.
     * @return Stripe\Stripe\Customer
     */
    public function StripeCustomer($request)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        StripeStripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $user = $request->user();

        $customer = \Stripe\Customer::create([
            'address' => [
                'line1' => $user->profile->address,
                'line2' => $user->profile->address,
            ],

            'email' => $user->email,
            'name' => $user->name,
            'phone' => $user->profile->phone,

        ]);

        return $customer;
    }
}
?>
