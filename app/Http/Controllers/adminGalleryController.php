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


        $data = $request->all();

        if(empty($data['image']))
        {
            return 'error';
        }

        $gallery = new Gallery();
        $gallery->fill($data);
        // salvo il file img
        $gallery->image = Storage::putFile('storage/public/img',$request->file('image'));

        $gallery->save();

        return redirect()->route('admin.gallery');
    }

    public function delete(Gallery $galleries){

        $galleries->delete();

        return redirect()->route('admin.gallery');
    }

    public function edit(Request $request,Gallery $galleries){

        if($request->isMethod('get')){
            return view('layout-back_end.gallery.edit', ['galleries' => $galleries]);

        }
        else{
            $data = $request->all();
            $galleries->fill($data);
        }

        $galleries->save();

        return redirect()->route('admin.gallery');
    }
}
