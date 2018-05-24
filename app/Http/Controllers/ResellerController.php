<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reseller;

class ResellerController extends Controller
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
        return view('inc.modalRe');
        
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
            'email' => 'required|email|unique:resellers'
        ]);
    
        $reseller = new Reseller();
        $reseller->name = $request->name;
        $reseller->age = $request->age;
        $reseller->nationality = $request->nationality;
        $reseller->contact = $request->contact;
        $reseller->email = $request->email;
        $reseller->address = $request->address;
        $reseller->company_name = $request->company_name;
        $reseller->company_contact = $request->company_contact;
        $reseller->company_address = $request->company_address;
        $reseller->company_experience = $request->company_experience;
        $reseller->message = $request->message;
        $reseller->brand1 = $request->brand1;
        $reseller->brand2 = $request->brand2;
        $reseller->brand3 = $request->brand3;
        $reseller->why_join = $request->why_join;
        
        
        $reseller->save();
    
        // if($reseller->save()){
        //      return redirect()->route('reseller', $reseller->id);
        // };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('ratecard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('inc.modalRe2');
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
