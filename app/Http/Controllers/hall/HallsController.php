<?php

namespace App\Http\Controllers\hall;

use App\Models\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HallCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class HallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logged_id = Auth::user()->id;

        $halls = Hall::where('user_id', $logged_id)->paginate(5);

        $categories=HallCategory::where('user_id', $logged_id)->paginate(5);

        return view('hall.hall',compact('halls', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logged_id = Auth::user()->id;

        $categories=HallCategory::where('user_id', $logged_id)->get();

        return view('hall.hall_add_info', compact('categories'));
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
            'images' => 'required',
            'hall_category' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $files = $request->file('images');

        foreach ($files as $file) {

            $filename= $file->hashName();

            $file->move(public_path('storage/hall_img'),$filename);

            $multi_imgs[] = $filename;
        }

        $hall = Hall::create([
            'user_id' => $request->user()->id,
            'halls_category_id' => $request['hall_category'],
            'images' => json_encode($multi_imgs),
            'title' => $request['title'],
            'description' => $request['description']
        ]);

        $hall->halls_meta()->create([
            'user_id' => $hall->user_id,
            'hall_id' => $hall->id,
            'meta_key' => 'hall_events',
            'meta_value' => [
                "wedding" => $request['wedding_price'].'-'.$request['wedding_guests'],
                "birthday" => $request['birthday_price'].'-'.$request['birthday_guests'],
                "concert" => $request['concert_price'].'-'.$request['concert_guests'],
                "festival" => $request['festival_price'].'-'.$request['wedding_guests'],
            ],
        ]);






        return redirect()->route('hall.halls.index')
        ->with('created', 'The Hall has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hall = Hall::findOrFail($id);

        $metaValue = $hall->halls_meta->toArray();

        $check = collect($metaValue);

        $events = $check->pluck('meta_value');

        $categories = HallCategory::all();

        return view('hall.hall_edit_info', compact('hall', 'categories', 'events'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hall_id)
    {
        $check = $request->validate([
            'category_id' => ['required'],
            'title' => ['required'],
            'description' => ['required']
        ]);

        $check = $request->user()->hall[0];

        if (empty($request->hasFile('images')) && $request['images'] == null) {
            $hall_images = $check->images;
        }
        else
        {
            $files = $request->file('images');

            foreach ($files as $file) {

                $hall_images = $file->hashName();

                $file->move(public_path('storage/hall_img'), $hall_images);

                // created an array variable
                // & assigned it to the file hashed names
                $filename[] = $hall_images;
            }
        }

        $request->user()->hall()->update([
            'id' => $hall_id,
            'user_id' => $request->user()->id,
            'halls_category_id' => $request['category_id'],
            'title' => $request['title'],
            'images' => $filename,
            'description' => $request['description'],
        ]);

        return redirect()->route('hall.halls.index')
        ->with('updated', 'Your Hall has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($hall_id)
    {
        $delete = Hall::findOrFail($hall_id);

        $delete->delete();

        return redirect()->route('hall.halls.index')
        ->with('deleted', 'The Hall has been deleted');
    }
}
