<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comunication;

class comunicationsController extends Controller
{
    public function index(){

        $data = [
            
                'comunications' => comunication::all(),

        ];

        return view('layout-front_end.comunications', ['data' => $data]);
    }
}
