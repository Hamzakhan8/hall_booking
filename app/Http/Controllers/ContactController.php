<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @return Request
     */
    public function index()
    {
        return view('front_view.contact-us');
    }
}
