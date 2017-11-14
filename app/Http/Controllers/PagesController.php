<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revisions;
class PagesController extends Controller
{
    public function registro(){
        $revisions = Revisions::All();
        //dd($revisions);
        return view('registro', ["revisions" => $revisions]);
    }
}
