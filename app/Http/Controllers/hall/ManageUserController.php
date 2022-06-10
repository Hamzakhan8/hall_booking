<?php

namespace App\Http\Controllers\hall;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Footer_info;
use App\Models\Hall;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logged_id = Auth::user()->id;

        $halls = Hall::where('user_id', $logged_id)->pluck('id');

        $bookings = array();

        foreach ($halls as $key) {

            $bookings = Bookings::where('halls_id', $key)->paginate(5);
        }

        $copy_right = Footer_info::value('copyRight');

        return view('hall.Bookings', compact('bookings', 'copy_right'));
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
        Bookings::where('id', $id)->delete();

        return redirect()->route('hall.bookings')
        ->with('booking_deleted', 'The booking has been deleted!');
    }
}
