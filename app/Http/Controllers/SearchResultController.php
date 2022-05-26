<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\HallCategory;
use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front_view.search-result-page');
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
            'city' => ['required'],
        ]);

        $halls = Hall::where('location', $request['city'])->paginate(10);

        if(empty($halls) || $halls == null)
        return back()->with('not found', 'There is no hall in '.$request['city'].'');

        return view('front_view.search-result-page', compact('halls'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $hall_details = Hall::where('id', $id)->with(['halls_meta', 'hallCategory', 'comments'])->get();

        $latest_halls = Hall::orderByDesc('id')->limit(3)->get();

        return view('front_view.hall-details', compact('hall_details', 'latest_halls'));
    }

    /**
     * Show the hall by the categories.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function byCategory($id, $location)
    {
        $by_category = Hall::where(['halls_category_id'=> $id,
         'location' => $location])->paginate(10);

        return view('front_view.search-result-page', compact('by_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function byName(Request $request)
    {
        $request->validate([
            'hall_name' => ['required', 'string'],
            'hall_city' => ['required', 'string'],
        ]);

        $by_name = Hall::where(['title' => $request->hall_name,
         'location' => $request->hall_city])->paginate(10);

         if(empty($by_name) || $by_name == null)
         return back()
         ->with('not found', 'There is no hall with '.$request->hall_name.' in '.$request->hall_city.'');

        return view('front_view.search-result-page', compact('by_name'));
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
