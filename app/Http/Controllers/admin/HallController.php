<?php

namespace App\Http\Controllers\admin;
use App\Models\halltype;
use App\Models\hall;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=hall::all();
        $halltype= halltype:: all();

        return view('admin.hall.index',compact('data','halltype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hall.index' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new hall;

        $data->hall_types_id=$request->hall_types_id;

        $data->title=$request->title;

        $data->save();

        return redirect('admin/hall')->with('success','data has being added');

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

        $halltype= halltype:: all();

        $data=hall::find($id);

        return view('admin.hall.edit',compact('data' , 'halltype'));
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

        $data=hall::find($id);
        $data->hall_types_id=$request->hall_types_id;

        $data->name=$request->name;
        $data->update();

        return redirect('admin/hall')->with('success','data has being updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $post = hall:: find($id);

        if($post){
            $post->delete();
            return redirect('admin/hall')->with('massage','deleted successfully');

        }
        else{
            return redirect('admin/hall')->with('massage', 'no post id found');
        }


    }
}
