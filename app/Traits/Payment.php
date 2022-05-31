<?php

namespace  App\Traits;
use Illuminate\Support\Str;
use Stripe\Stripe as StripeStripe;

trait Payment
{

    /**
     * creating charge from customer id
     * @return StripeStripe
     */
    public function StripeCharge($customerID, $request)
    {
                // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        StripeStripe::setApiKey("sk_test_51K3NIIAcehZZuafTMTklTzp2xhUUybuUhqqE0C9OOxN3POXNmfHIAwYC8Y2jfZK4bZAwKX8i71qhwEyPa39nXQJZ00SS2ddkFh");

        $charge = \Stripe\Charge::create([
            'amount' => $request['hall_price'] * 100, // Convert dollar into cents,
            'currency' => 'usd',
            'source' => $request['stripeSource'], // A source token created from stripe.js while submitting the form
            'customer' => $customerID,
        ], [
            'idempotency_key' => Str::orderedUuid(),
        ]);

        return $charge;
    }
}
?>
