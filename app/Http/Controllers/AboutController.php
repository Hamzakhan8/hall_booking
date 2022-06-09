<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\AboutUS;
use App\Models\Bookings;
use App\Models\Comments;
use App\Models\Contacts_info;
use App\Models\Footer_info;
use App\Models\Hall;
use App\Models\Transactions;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutUS::all();

        $comments = Comments::orderBy('id', 'desc')->get();

        $bookings = Bookings::all();

        $halls = Hall::all();

        $transaction = Transactions::all();

        $list_halls = Hall::orderBy('location')->get();

        $footer = Footer_info::all();

        $contacts = Contacts_info::value('short_description');

        return view('front_view.about-us',
        compact('about', 'comments', 'bookings', 'halls', 'transaction', 'list_halls', 'footer', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
