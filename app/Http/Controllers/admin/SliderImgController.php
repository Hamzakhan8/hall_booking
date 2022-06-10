<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Footer_info;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider_imgs = SliderImage::all();

        $copy_right = Footer_info::value('copyRight');

        return view('admin.slider_img', compact('slider_imgs', 'copy_right'));
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
            'multi_img' => ['required']
        ]);

        $files = $request->file('multi_img');

        // foreach the files variable and hashing each file name individually
        foreach ($files as $file) {

            $avatar_name = $file->hashName();

            $file->move(public_path('storage/slider_imgs'), $avatar_name);

            // created an array variable
            // & assigned it to the file hashed names
            $filename[] = $avatar_name;
        }

        $user_id = Auth::user()->id;
        // uploading array of files in json formate to database
        SliderImage::updateOrCreate([
            'user_id' => $user_id,
            'slider_imgs' => json_encode($filename),
        ]);

        //returning the index function to redirect view
        return redirect()->route('admin.slider.img')
        ->with('created', 'Slider images has been added');
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
        $request->validate([
            'multi_img' => ['required']
        ]);

        $files = $request->file('multi_img');

        // foreach the files variable and hashing each file name individually
        foreach ($files as $file) {

            $avatar_name = $file->hashName();

            $file->move(public_path('storage/slider_imgs'), $avatar_name);

            // created an array variable
            // & assigned it to the file hashed names
            $filename[] = $avatar_name;
        }

        $user = $request->user();
        // uploading array of files in json formate to database
        SliderImage::where([
            'id' => $id,
            'user_id' => $user->id,
        ])->update([
            'slider_imgs' => json_encode($filename),
        ]);

        //returning the index function to redirect view
        return redirect()->route('admin.slider.img')
        ->with('updated', 'Slider images has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SliderImage::findOrFail($id)->delete();

        return redirect()->route('admin.slider.img')
        ->with('deleted', 'Slider images has been deleted');
    }
}
