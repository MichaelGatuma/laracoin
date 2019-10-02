<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $greeting = 'Hello,';
        $name = 'Michael,';
        //return view('posts.index', compact('greeting'));
        return Post::all();
        return view('posts.index')->with('name',$name);
    }
    public function services(){
        $data=array(
            'title' => 'Services',
            'program' => ['Large Scale Printing', 'Tshirt and Branding', 'Transportation means']
        );
        return view('about.about')->with($data);
    }
}
