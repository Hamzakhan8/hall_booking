<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\HallCategory;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use App\Traits\Cities;
class FrontHomeController extends Controller
{
    use Cities;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retrieving the slider images
        $slider_images = SliderImage::value('slider_imgs');

        $halls = Hall::orderByDesc('id')->limit(3)->get();

        $list_halls = Hall::orderBy('location')->get();

        $categories = HallCategory::all();

        // $pluck = $list_halls->toArray();
        // $col = collect($pluck);

        // dd($col->pluck('hall_category'));

        $cities = $this->cities();

        return view('front_view.index', compact('slider_images', 'cities', 'halls', 'list_halls', 'categories'));
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
        //
    }
}
