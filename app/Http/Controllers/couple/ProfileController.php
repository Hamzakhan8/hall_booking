<?php

namespace App\Http\Controllers\couple;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\StripeCustomer;

class ProfileController extends StripeCustomerController
{
    use StripeCustomer;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('couple.profile');

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
        //
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'avatar' => ['required', 'file', 'max:2048'],
            'name' => ['required','string'],
            'contact_number' => ['required','numeric','digits_between:11,15'],
            'address' => ['required','max:255'],
            'description' => ['required','max:255']
        ]);

        $user = $request->user();

        $logged_id =  Auth::user()->id;

        User::where('id', $logged_id)->update([
            'name' => $request['name'],
        ]);

        if (empty($request->hasFile('avatar')) && $request['avatar'] == null) {
            $avatar_name = $request->user()->profile->avatar;
        }
        else
        {
            $file = $request->file('avatar');

            $avatar_name = $file->hashName();

            $file->move(public_path('storage/profile_img'), $avatar_name);
        }


        Profile::updateOrCreate([
            'user_id' => $logged_id,
        ],
        [
            'avatar' => $avatar_name,
            'contact' => $request['contact_number'],
            'address' => $request['address'],
            'description' => $request['description'],
        ]);

        if($user->role === "couple")
        // making stripe customer for every user that registers
        $customer = $this->StripeCustomer($request);

        $this->stripe_customer($customer, $request);

        return view('couple.profile')->with('updated', 'Profile has been updated');
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pass_update(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'confirmed']
        ]);

        $logged_password = Auth::user()->password;

        $logged_id =  Auth::user()->id;


        if(!Hash::check($request['old_password'], $logged_password))
            return redirect()->route('admin.profile')
            ->with('error_password', 'Old password does not match!');

        User::where('id', $logged_id)->update([
            'password' => Hash::make($request['new_password']),
        ]);

        Auth::logout();

        return redirect()->route('front.home');
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
