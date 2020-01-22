<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class galleryController extends Controller
{
    public function index(){

        $data = [
            
            'galleries' => Gallery::all(),

        ];

        return view('layout-front_end.gallery', ['data' => $data]);
    }
}
