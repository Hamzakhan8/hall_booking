<?php

namespace App\Http\Controllers\hall;



use App\Http\Controllers\Controller;
use App\Models\Footer_info;
use App\Models\HallCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HallCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $categories = HallCategory::where('user_id', $user->id)->paginate(5);

        $copy_right = Footer_info::value('copyRight');

        return view('hall.Hall_category', compact('categories', 'copy_right'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'category' => ['required', 'string']
        ]);

        $logged_id = Auth::user()->id;

        HallCategory::create([
            'user_id' => $logged_id,
            'category' => $request['category'],
        ]);

        return redirect()->route('hall.category.index')
        ->with('added', 'Category has been added!');
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $request->validate([
            'category' => ['required', 'string']
        ]);


        $request->user()->hallCategory()
        ->where([
            'id' => $category_id,
            'user_id' => $request->user()->id,
        ])
        ->update([
            'category' => $request['category'],
        ]);

        return redirect()->route('hall.category.index')
        ->with('updated','Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        HallCategory::where('id', $category_id)->delete();

        return redirect()->route('hall.category.index')
        ->with('deleted', 'Category has been deleted!');
    }
}
