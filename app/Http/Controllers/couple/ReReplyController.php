<?php

namespace App\Http\Controllers\couple;

use App\Http\Controllers\Controller;
use App\Models\ReReply;
use Illuminate\Http\Request;

class ReReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($reply_id)
    {
        // dd($reply_id);
        $re_replies = ReReply::where('reply_id', $reply_id)->get();

        return view('couple.reply', compact('re_replies'));
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
            'reply_id' => ['required'],
            'reply' => ['required', 'string'],
        ]);

        $reply_id = $request['reply_id'];

        $logged_id = $request->user()->id;
        $logged_username = $request->user()->username;

        ReReply::create([
            'user_id' => $logged_id,
            'username' => $logged_username,
            'reply_id' => $request['reply_id'],
            'reply' => $request['reply'],
        ]);

        return $this->index($reply_id);
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
