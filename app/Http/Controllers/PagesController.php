<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index(){
    // 	return view('index');
    // }

    public function about(){
    	return view('about');
    }

    public function projects(){
    	return view('projects');
    }

    public function ratecard(){
    	return view('ratecard');
    }

    public function contacts(){
    	return view('contacts');
    }

    public function advertiser(){
        return view('advertiser');
    }
}
