<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $data = Setting::find(1);
        return view('Admin.settings.edit',compact('data'));
    }

    public function store(Request $request){
        $data = Setting::find(1);
        $data->name_ar=$request->name_ar;
        $data->name_en=$request->name_en;
        $data->description_ar=$request->description_ar;
        $data->description_en=$request->description_en;
        $data->image=$request->image;
        $data->facebook=$request->facebook;
        $data->whatsapp=$request->whatsapp;
        $data->instagram=$request->instagram;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->why_us_name_ar=$request->why_us_name_ar;
        $data->why_us_name_en=$request->why_us_name_en;
        $data->why_us_description_ar=$request->why_us_description_ar;
        $data->why_us_description_en=$request->why_us_description_en;
        $data->why_us_is_active=$request->why_us_is_active;
        $data->save();

        return redirect('settings')->with('message', trans('lang.updated_s'));
    }
}
