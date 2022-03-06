<?php

namespace App\Http\Controllers;

use DB;
use Session;

use App\Http\Requests;
use App\Slider;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
Session_start();

class SliderController extends Controller
{
    public function index() {
        $this->AdminAuthCheck();
        return view('admin.add_slider');
    }
    
    public function all_slider() {
        $this->AdminAuthCheck();
        $slider = DB::select('select * from slider');
        return view('admin.all_slider',['slider'=>$slider]);
    }
    
    //this is to Unactive part of slider
    public function unactive_slider(Request $request, $slider_id) {
        DB::table('slider')
            ->where('slider_id',$slider_id)
            ->update(['slider.status' => 0]);
            Session::put('message',  'Slider Active successfuly !!');
            return Redirect::to('/all-slider');
    }
     //this is to Active part of slider
     public function active_slider($slider_id) {
        DB::table('slider')
            ->where('slider_id',$slider_id)
            ->update(['slider.status' => 1 ]);
            Session::put('message',  'Slider Active successfuly !!');
            return Redirect::to('/all-slider');
     }


    public function save_slider(Request $request)
    {   
        $this->validate($request, [
            'slider_image' => 'image|nullable|max:1999'
        ]);
        //Handle file upload
        if ($request->hasFile('slider_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('slider_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('slider_image')->storeAs('public/slider', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        $data = new Slider;
        $data->status = $request ->input('status');
        $data->slider_image = $fileNameToStore;
        $data->save();

        Session::put('message','slider added successfully');
        return Redirect::to('/add-slider');
    }

    public function show($slider_id) {
        $slider = DB::select('select * from slider where slider_id = ?',[$slider_id]);
        return view('admin.edit_slider',['slider'=>$slider]);
    }

    // public function edit(Request $request,$slider_id) {
    //     $slider_name = $request->input('slider_name');
    //     $status = $request->input('status');
    //     $description = $request->input('description');
    //     Session::put('message', 'slider updated successfuly !!');
    //     return Redirect::to('/all-slider');
    // }

    public function delete_slider($slider_id) {
        DB::table('slider')
            ->where('slider_id',$slider_id)
            ->delete();
        Session::put('message', 'Product deleted successfuly !!');
        return Redirect::to('/all-slider');
    }

    public function AdminAuthCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }
}
