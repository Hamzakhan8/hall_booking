<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Footer_info;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer_info::all();

        return view('admin.footer_info', compact('footer'));
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
            'location' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'short_desc' => ['required', 'string', 'max:255'],
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url'
        ]);

        Footer_info::create([
            'location' => $request->location,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'short_description' => $request->short_desc,
            'social_links' => [
                "facebook" => $request['facebook'],
                "twitter" => $request['twitter'],
                "instagram" => $request['instagram'],
                "linkedin" => $request['linkedin']
            ],
        ]);

        return redirect()->route('admin.footer.index')
        ->with('created', 'Footer info has been created');
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
    public function update(Request $request, $footer_id)
    {
        $request->validate([
            'location' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'short_desc' => ['required', 'string', 'max:255'],
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url'
        ]);

        $footer = Footer_info::findOrFail($footer_id);

        $footer->update([
            'location' => $request->location,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'short_description' => $request->short_desc,
            'social_links' => [
                "facebook" => $request['facebook'],
                "twitter" => $request['twitter'],
                "instagram" => $request['instagram'],
                "linkedin" => $request['linkedin']
            ],
        ]);

        return redirect()->route('admin.footer.index')
        ->with('Updated', 'Footer info has been Updated');
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
