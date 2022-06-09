<?php

namespace App\Http\Controllers\couple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Payment;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    use Payment;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'hall_id' => ['required', 'numeric'],
            'hall_title' => ['required', 'string'],
            'hall_price' => ['required', 'numeric'],
            'hall_event' => ['required', 'string'],
            'checkin_date' => ['required' , 'date'],
            'checkout_date' => ['required', 'date', 'after:today'],
        ]);

        $user = $request->user();
        $customer = $user->stripe_customer;

        if (!$customer)
            return back()->with('first_profile', 'We need some information, update your profile first!');
            // dd("not");

        $charge = $this->StripeCharge($customer->customer_id, $request);


        $user->transactions()
        ->create([
            'user_id' => $user->id,
            'user_name' => $user->username,
            'transaction_id' => Str::orderedUuid(),
            'amount' => $charge->amount,
            'date' => now()->format('Y-m-d'),
            'card_cvc' => $charge->payment_method_details->card->checks->cvc_check,
            'exp_month' => $charge->payment_method_details->card->exp_month,
            'exp_year' => $charge->payment_method_details->card->exp_year,
            'card_last_4' => $charge->payment_method_details->card->last4,
        ]);



        $user->bookings()->create([
             'user_id' => $user->id,
             'username' => $user->username,
             'halls_id' => $request->hall_id,
             'hall_name' => $request->hall_title,
             'booking_date' => now()->format('Y-m-d'),
             'checkin_date' => $request->checkin_date,
             'checkout_date' => $request->checkout_date,

        ]);

        return redirect()->route('front.search.details', $request['hall_id'])
        ->with('created', 'Payment has been made successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
