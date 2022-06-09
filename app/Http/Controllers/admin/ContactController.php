<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Contacts_info;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::paginate(5);

        return view('admin.contact', compact('contacts'));
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
            'call' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required', 'string'],
            'short_description' => ['required', 'string'],
        ]);

        $user = $request->user();

        Contacts_info::updateOrCreate(
            ['user_id' => $user->id],
        [
            'call_number' => $request->call,
            'email' => $request->email,
            'address' => $request->address,
            'short_description' => $request->short_description,
        ]);

        return redirect()->route('admin.contact')
        ->with('added', 'Contact info has been added to contacts page');
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
        Contacts::where('id', $id)->delete();

        return redirect()->route('admin.contact')
        ->with('contact_deleted', "The user's contact message has been deleted!");
    }
}
