<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(Request $request)
    {
        return view('home');
    }

    public function upload_image(Request $request)
    {
        $image=$request->image;
        $imageName = date("sihdmY").'_'.$image->getClientOriginalName();  
        $image->move(public_path('image/all/'), $imageName);
        $imagePath='image/all/'.$imageName;
        $upload = new Image;
        $upload->user_id = Auth::user()->id;
        $upload->image_name = $imageName;
        $upload->no_of_likes = 0;
        $upload->image_path = $imagePath;
        if($upload->save()){
            return redirect()->route('home')->with('message','Image uploaded successfully');
        }
    }

    public function image_section(){
        return view('image_section');
    }

    public function user_image_section(){
        return view('user_image_section');
    }

    public function like_image(Request $request)
    {  
        $image=Image::find($request->id);
        $image->no_of_likes++;
        if($image->save()){
            return 1;
        }
        return 0;
    }
    
}
