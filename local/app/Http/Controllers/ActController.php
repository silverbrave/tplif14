<?php

namespace App\Http\Controllers;


use App\Actualite;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ActController extends Controller
{
    public function index(){
        $actus = DB::select('select * from actualites');
        return view('actualites.index',compact('actus'));
    }

    public function create(){
        return view('actualites.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'titre' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return redirect(route('actualites.create'))
                ->withErrors($validator)
                ->withInput();
        }

        if(Actualite::create($request->all())){
            return redirect(route('actualites.index'));
        }
        else{
            return redirect(route('actualites.create'))->withInput();
        }

    }
}
