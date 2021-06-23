<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index');
    }
    public function socialSettings()
    {
        return view('admin.setting.social');
    }
    public function frontSettings()
    {
        return view('admin.setting.front');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if ($request->logo) {
            $imageName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);
            $data['logo'] =  $imageName;
        }
        setting($data)->save();
        return back();
    }
}
