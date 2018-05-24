<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscriber;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ratecard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inc.modalAd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request, [
        'email' => 'required|email|unique:subscribers'
    ]);

    $subscriber = new Subscriber(); //S to s
    $subscriber->company_name = $request->company_name;
    $subscriber->company_special = $request->company_special;
    $subscriber->country = $request->country;
    $subscriber->address = $request->address;
    $subscriber->postcode = $request->postcode;
    $subscriber->email = $request->email;
    $subscriber->contact = $request->contact;
    $subscriber->message = $request->message;

        if($subscriber->save()){
            return redirect()->route('subscriber');
        }else{
            Session::flash('danger', 'Sorry there is problem submitting the form');
            return redirect()->route('subscriber');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ratecard');
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
