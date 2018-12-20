<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Gallery;

class adminGalleryController extends Controller
{
    public function index(){

        return view('layout-back_end.gallery.gallery', ['gallerys' => Gallery::all()]);
    }

    public function create(){

        return view('layout-back_end.gallery.create');

    }

    public function save(Request $request, Gallery $gallery){

        // dd($request->file('image'));
        Storage::putFile('/',$request->file('image'));
        dd('ok');

        // $data = $request->all();
        //
        // if(empty($data['timage']))
        // {
        //     return 'error';
        // }
        //
        // $gallery = new Gallery();
        // $gallery->fill($data);
        // $gallery->save();

        return redirect()->route('admin.gallery');
    }
}
