<?php

namespace App\Http\Controllers;

use App\Models\Contacts_info;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @return Request
     */
    public function index()
    {
        $contacts = Contacts_info::all();

        return view('front_view.contact-us', compact('contacts'));
    }
}
