<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Revisions;
use App\Evaluation;
use App\Subject;
use App\Section;
class PagesController extends Controller
{
    public function home(){
        $users = Evaluation::find(1);
        foreach($users->revisions as $user){
     //       var_dump($user);
       //       echo "<br>";
        }
        $user = User::find(3);
       
        foreach ($user->sections as $key => $value) {
            var_dump($value);
              echo "<br>";
        }
        dd($user->sections[0]->subject->name);
        return "";
        //view('welcome',[]);
    }
}