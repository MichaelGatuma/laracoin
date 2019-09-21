<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $greeting = 'Hello,';
        $name = 'Michael,';
        //return view('index', compact('greeting'));
        return view('index')->with('name',$name);
    }
    public function services(){
        $data=array(
            'title' => 'Services',
            'program' => ['Large Scale Printing', 'Tshirt and Branding', 'Transportation means']
        );
        return view('about.about')->with($data);
    }
}
