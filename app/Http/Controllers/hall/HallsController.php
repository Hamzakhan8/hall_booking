<?php

namespace App\Http\Controllers\hall;

use App\Models\Hall;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HallCategory;
use Illuminate\Support\Facades\Auth;
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
        $logged_id = Auth::user()->id;

        $halls = Hall::where('user_id', $logged_id)->paginate(5);

        $categories=HallCategory::where('user_id', $logged_id)->paginate(5);

        return view('hall.hall',compact('halls', 'categories'));
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

            'images'=> 'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $files = $request->file('images');

        foreach ($files as $file) {

            $filename= $file->hashName();

            $file->move(public_path('storage/hall_img'),$filename);

            $multi_imgs[] = $filename;
        }

        $loggedId = Auth::user()->id;

        $category = HallCategory::all();

        foreach ($category as $cat) {

            $category_id = $cat->id;
        }

        Hall::create([
            'user_id'=>$loggedId,
            'halls_category_id'=>$category_id,
            'images'=> json_encode($multi_imgs),
            'title'=>$request['title'],
            'description'=>$request['description']
        ]);


        return $this->index();


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

        $hallcategory=HallCategory::all();


        $data=Hall::find($id);

        return view('hall.Halls.edit',compact('data' , 'hallcategory' ));
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


        $destination ='storage/hall_img'.$data->images ;

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
