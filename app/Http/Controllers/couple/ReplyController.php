<?php

namespace App\Http\Controllers\couple;

use App\Http\Controllers\Controller;
use App\Models\Footer_info;
use App\Models\Reply;
use App\Models\ReReply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($comment_id)
    {
        $replies = Reply::where('comment_id', $comment_id)->get();

        $re_replies = ReReply::where('comment_id', $comment_id)->get();

        $copy_right = Footer_info::value('copyRight');

        return view('couple.reply', compact('replies', 're_replies', 'comment_id', 'copy_right'));
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
    public function store(Request $request, $comment_id)
    {
        $request->validate([
            'reply_id' => ['required'],
            'reply' => ['required', 'string'],
        ]);

        $logged_id = $request->user()->id;
        $logged_username = $request->user()->username;

        ReReply::create([
            'user_id' => $logged_id,
            'username' => $logged_username,
            'username_to' => $request['reply_username'],
            'comment_id' => $comment_id,
            'reply_id' => $request['reply_id'],
            'reply' => $request['reply'],
        ]);

        return $this->index($comment_id);
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
    public function destroy($id, $comment_id)
    {
        ReReply::where('id', $id)->delete();

        return $this->index($comment_id);
    }
}
