<?php

namespace App\Http\Controllers\couple;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('couple.profile');

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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'avatar' => ['required', 'file', 'sometimes'],
            'name' => ['required'],
            'contact_number' => ['required'],
            'address' => ['required'],
            'description' => ['required']
        ]);

        $logged_id =  Auth::user()->id;

        User::where('id', $logged_id)->update([
            'name' => $request['name'],
        ]);

        if (empty($request->hasFile('avatar')) && $request['avatar'] == null) {
            $avatar_name = $request->user()->profile->avatar;
        }
        else
        {
            $file = $request->file('avatar');

            $avatar_name = $file->hashName();

            $file->move(public_path('storage/profile_img'), $avatar_name);
        }


        Profile::updateOrCreate([
            'user_id' => $logged_id,
        ],
        [
            'avatar' => $avatar_name,
            'contact' => $request['contact_number'],
            'address' => $request['address'],
            'description' => $request['description'],
        ]);

        return $this->index();
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
