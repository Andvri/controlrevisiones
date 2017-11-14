<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revisions;
use App\Http\Requests\CreateRevisionsRequest;
class RevisionsController extends Controller
{
    public function showregistro(){
        $revisions = Revisions::All();
        //dd($revisions);
        return view('registro', ["revisions" => $revisions]);
    }
    public function create(CreateRevisionsRequest $request){
        //dd($request->all());
        $revision = Revisions::create([]);
    }
}
