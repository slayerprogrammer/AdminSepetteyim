<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }


        $setting= new Setting;
        $setting= $setting->find(1);
        $setting->description=$request->get('description');
        $setting->keyword=$request->get('keyword');
        $setting->email=$request->get('email');
        $setting->phone=$request->get('phone');
        $setting->fax=$request->get('fax');
        $setting->mobilephone=$request->get('mobilephone');
        $setting->whatsapp=$request->get('whatsapp');
        $setting->facebook=$request->get('facebook');
        $setting->instagram=$request->get('instagram');
        $setting->filename=$request->get('filename');
        $setting->slug=$request->get('slug');
        $setting->save();

        return redirect('admin/dashboard')->with('success', 'Information has been added');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

       // var_dump($request->all());

        $setting= new Setting;
        $setting->description=$request->get('description');
        $setting->keyword=$request->get('keyword');
        $setting->email=$request->get('email');
        $setting->phone=$request->get('phone');
        $setting->fax=$request->get('fax');
        $setting->mobilephone=$request->get('mobilephone');
        $setting->whatsapp=$request->get('whatsapp');
        $setting->facebook=$request->get('facebook');
        $setting->instagram=$request->get('instagram');
        $setting->filename=$request->get('filename');
        $setting->slug=$request->get('slug');
        $setting->update();

        return redirect('setting')->with('success', 'Information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
