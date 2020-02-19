<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfoliocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $portafolio=[
            ['title' =>'proyecto 1'],
            ['title' =>'proyecto 2'],
            ['title' =>'proyecto 3'],
            ['title' =>'proyecto 4'],
        ];
        return view('/portafolio', compact('portafolio'));
    }
}
