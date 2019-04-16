<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::first();
        return view('admin.contact.index', compact('contacts'));
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
        $contact =  Contact::findOrCreate(1);
        $contact->maps=$request->get('maps');
        $contact->address1=$request->get('address1');
        $contact->address2=$request->get('address2');
        $contact->address3=$request->get('address3');
        $contact->phone1=$request->get('phone1');
        $contact->phone2=$request->get('phone2');
        $contact->phone3=$request->get('phone3');
        $contact->mobile1=$request->get('mobile1');
        $contact->mobile2=$request->get('mobile2');
        $contact->mobile3=$request->get('mobile3');
        $contact->mail1=$request->get('mail1');
        $contact->mail2=$request->get('mail2');
        $contact->mail3=$request->get('mail3');
        $contact->save();

        return redirect('admin/contact')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contacts=Contact::first();
        $settings=Setting::first();
        return view('layouts.frontend.contact.index', compact('contacts', 'settings'));

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
        //
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
