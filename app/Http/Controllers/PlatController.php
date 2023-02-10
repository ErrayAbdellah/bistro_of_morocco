<?php

namespace App\Http\Controllers;

use App\Models\Plat;
// use Facade\FlareClient\Stacktrace\File\delete;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plats = Plat::all();
        return  view('home',['plats'=> $plats]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role){
            return view('addplat');
        }else{
            return redirect('/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $plat = $request->all();
            
            if($image = $request->file('image')){
                $image_path = 'images/';
                $img_name = date('YmdHis').".".$image->getClientOriginalExtension();
                $image->move($image_path,$img_name);
                $plat['image']=$img_name;
            }
            
            Plat::create($plat);
            return redirect()->back()->with("see");
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
        echo "SHOW";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->role){
            $plats = Plat::find($id);
            return view('update',['plats'=>$plats]);
        }else{
            return redirect('/home');
        }
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
        $plat = Plat::find($id);
        if(File::exists($plat)){
           
        }
        $validate = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'image'=>'required|image'
        ]);

        $deletImage = $plat->image;
        $plat->title = $validate['title'];
        $plat->description = $validate['description'];
        $plat->price = $validate['price'];
        
        if($image = $request->file('image')){
            
            $image_path = 'images/';
            $img_name = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($image_path,$img_name);
            $plat->image = $img_name;
            File::delete(public_path("images/$deletImage"));
        }else{
            unset($plat['image']);
        } ;
        $plat->update();
        return redirect()->back()->with("see");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role){
            
            $plat = Plat::find($id);
            File::delete(public_path("images/$plat->image"));
            $plat->delete();
    
            return redirect('/home')->with('seccess','Plat remove');
        }else{
            return redirect('/home');
        }
    }
}
