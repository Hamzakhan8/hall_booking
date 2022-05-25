<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'comment' => ['required', 'string'],
        ]);

        $user = $request->user();

        if(!$user)
        return back()->with('not logged in', 'You should login first!');

        $comment = Comments::create([
            'user_id' => $user->id,
            'username' => $user->username,
            'hall_id' => $request->hall_id,
            'hall_name' => $request->hall_title,
            'comment' => $request->comment,
        ]);

        return redirect()->route('front.search.details', $comment->hall_id);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function replyComment(Request $request)
    {
        $request->validate([
            'reply' => ['required', 'string'],
        ]);

        $user = $request->user();

        if(!$user)
        return back()->with('not logged in', 'You should login first!');

        $replied = Reply::create([
            'user_id' => $user->id,
            'username' => $user->username,
            'comment_id' => $request->comment_id,
            'reply' => $request->reply,
            'hall_id' => $request->comment_hall_id,
            'hall_name' => $request->comment_hall_name,
        ]);

        return redirect()->route('front.search.details', $replied->hall_id);
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
