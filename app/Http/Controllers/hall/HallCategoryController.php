<?php

namespace App\Http\Controllers\hall;



use App\Http\Controllers\Controller;
use App\Models\HallCategory;
use Illuminate\Http\Request;


class HallCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HallCategory::all();

        return view('hall.HallCategory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('hall.HallCategory.create');

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

        // $data = new HallCategory;

        HallCategory::create([
            'category' => $request['category'],
        ]);

        // $data->category=$request->category;

        // $data->save();
        // return redirect()->route('hallcategory.index')->with('success','data has being added');
        return $this->index();
        // return redirect('hall/hall')->with('success','data has being added');

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


        $data = HallCategory::find($id);

        return view('hall.HallCategory.edit', compact('data'));
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
        $request->validate([
            'category' => ['required', 'string']
        ]);

        $data = HallCategory::find($id);



         $data->category=$request->category;
         $data->update();

        return redirect('hall/hallcategory')->with('success','data has being updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $post = HallCategory:: find($id);

        if($post){
            $post->delete();
            return redirect('hall/hallcategory')->with('massage','deleted successfully');

        }
        else{
            return redirect('hall/hallcategory')->with('massage', 'no post id found');
        }


    }
}
