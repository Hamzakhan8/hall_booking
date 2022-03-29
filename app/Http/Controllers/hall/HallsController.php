<?php

namespace App\Http\Controllers\hall;

use App\Models\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;




class HallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Hall::all();

        return view('hall.Halls.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('hall.Halls.create' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data= new Hall;

        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->mobile=$request->mobile;
        $data->address=$request->address;



        if($request->hasfile('photo'))
        {

            $file=$request->file('photo');
            $filename=time(). '.' . $file->getClientOriginalExtension();
            $file->move('upload/customer/',$filename);
            $data->photo=$filename;

        }


        $data->save();

        return redirect('admin/customer')->with('success','data has being added');

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


        $data=Hall::find($id);

        return view('hall.Halls.edit',compact('data'  ));
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

        $data=Hall::find($id);




        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->mobile=$request->mobile;
        $data->address=$request->address;



            if($request->hasfile('images')) {

                $destination ='upload/customer/'.$data->photo;

                if(File::exists($destination)){
                    File::delete($destination);
                }


                $file=$request->file('photo');
                $filename=time(). '.' . $file->getClientOriginalExtension();
                $file->move('upload/customer/',$filename);
                $data->photo=$filename;

    }


        $data->update();

        return redirect('hall/Halls')->with('success','data has being updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $data = Hall :: find($id);


        $destination ='upload/customer/'.$data->photo ;

                if(File::exists($destination)){

                    File::delete($destination);
                }


                if($data){

                $data->delete();

            return redirect('hall/Halls')->with('massage','deleted successfully');

        }
        else{

            return redirect('hall/Halls')->with('massage', 'no post id found');
        }


    }
}
