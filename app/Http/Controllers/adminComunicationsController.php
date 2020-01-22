<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\comunication;

class adminComunicationsController extends Controller
{
    public function index(){

        return view('layout-back_end.comunications.comunications', ['comunications' => comunication::all()]);
    }

    public function create(){

        return view('layout-back_end.comunications.create', ['comunications' => comunication::all()]);
    }

    public function save(Request $request, comunication $comunication){
        $data = $request->all();
        

        if(empty($data['title']) || empty($data['text']))
        {
            return 'error';
        }

        Storage::putFile('/', $request->file('image'));
        
        $data = $request->all();
        $comunication = new comunication();
        $comunication->fill($data);
        
        $imageURL = Storage::putFile('public/upload', $request->file('image'));
        $comunication->image = str_replace("public", "storage", $imageURL);
        $comunication->save();

        return redirect()->route('admin.comunications');
    }

    public function delete(comunication $comunication){

        $comunication->delete();

        return redirect()->route('admin.comunications');
    }

    public function edit(Request $request, comunication $comunication){

        if($request->isMethod('get')){
            return view('layout-back_end.comunications.edit',['comunication' => $comunication]);

        }
        else{
            $data = $request->all();
            $comunication->fill($data);
        }

        $comunication->save();

        return redirect()->route('admin.comunications');
    }
}
