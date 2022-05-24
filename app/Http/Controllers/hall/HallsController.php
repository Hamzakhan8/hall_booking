<?php

namespace App\Http\Controllers\hall;

use App\Models\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HallCategory;
use App\Models\Halls_meta;
use Illuminate\Support\Facades\Auth;
use App\Traits\Cities;
class HallsController extends Controller
{
    use Cities;
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

        $cities = $this->cities();

        return view('hall.hall_add_info', compact('categories', 'cities'));
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
            'images' => 'required|min:4|max:6',
            'hall_category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url'
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
            'description' => $request['description'],
            'location' => ucfirst($request['location']),
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

        $hall->halls_meta()->create([
            'user_id' => $hall->user_id,
            'hall_id' => $hall->id,
            'meta_key' => 'hall_links',
            'meta_value' => [
                "facebook" => $request['facebook'],
                "twitter" => $request['twitter'],
                "instagram" => $request['instagram'],
                "linkedin" => $request['linkedin']
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

        $cities = $this->cities();

        return view('hall.hall_edit_info', compact('hall', 'categories', 'events', 'cities'));

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
            'hall_category' => ['required'],
            'title' => ['required'],
            'description' => ['required']
        ]);

        $check = $request->user()->hall[0];

        if (empty($request->hasFile('images')) && $request['images'] == null) {
            $hall_images = $check->images;

            $filename = $hall_images;
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

        $request->user()
        ->hall()
        ->where(
            ['id' => $hall_id],
            ['user_id' => $request->user()->id])
        ->update([
            'halls_category_id' => $request['hall_category'],
            'title' => $request['title'],
            'images' => $filename,
            'description' => $request['description'],
            'location' => ucfirst($request['location']),
        ]);

        Halls_meta::where(
            ['user_id' => $request->user()->id],
            ['hall_id' => $hall_id],
            ['meta_key' => 'hall_events'])
        ->update([
            'meta_value' => [
                "wedding" => $request['wedding_price'].'-'.$request['wedding_guests'],
                "birthday" => $request['birthday_price'].'-'.$request['birthday_guests'],
                "concert" => $request['concert_price'].'-'.$request['concert_guests'],
                "festival" => $request['festival_price'].'-'.$request['wedding_guests'],
            ]
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
