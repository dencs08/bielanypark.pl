<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function start(){
        return view('start', [
            //parameters
        ]);
    }

    public function kontakt(){
        return view('kontakt', [
            //parameters
        ]);
    }

    public function mieszkania(){
        return view('mieszkania', [
            //parameters
        ]);
    }

    public function wybor3d(){
        return view('wybor3d', [
            //parameters
        ]);
    }

    public function polityka(){
        return view('polityka', [
            //parameters
        ]);
    }
}
