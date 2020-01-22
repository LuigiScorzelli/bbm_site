<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;


class contactController extends Controller
{
    public function index(){

        return view('layout-front_end.contact');
    }

    public function mail(Request $request) {
        
        $validatedata = $request->validate([
            'price' => 'integer',
            'email' => 'email'
        ]);
        dd($request);
        Mail::to('example@gmail.io')->send(new OrderShipped($request->name));
    }

}
