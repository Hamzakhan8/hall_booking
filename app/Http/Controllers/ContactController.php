<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Contacts_info;
use App\Models\Footer_info;
use App\Models\Hall;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @return Request
     */
    public function index()
    {
        $contacts = Contacts_info::all();

        $list_halls = Hall::orderBy('location')->get();

        $footer = Footer_info::all();

        return view('front_view.contact-us', compact('contacts', 'list_halls', 'footer'));
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
            'First_Name' => ['required', 'alpha'],
            'Last_Name' => ['required', 'alpha'],
            'Email' => ['required', 'email'],
            'Contact_Number' => ['required', 'string'],
            'Message' => ['required', 'string'],
        ]);

        $user = $request->user();

        if(!$user)
        return back()->with('danger', 'You should first login!');

        Contacts::create([
            'user_id' => $user->id,
            'username' => $user->username,
            'first_name' => $request->First_Name,
            'last_name' => $request->Last_Name,
            'email' => $request->Email,
            'mobile' => $request->Contact_Number,
            'your_message' => $request->Message,
        ]);

        return redirect()->route('front.contact')
        ->with('success', 'Your message has been sent to the admin!');
    }
}
