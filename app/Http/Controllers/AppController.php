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

    public function lokale(){
        function unique_multidim_array($array, $key) {
            $temp_array = array();
            $i = 0;
            $key_array = array();
        
            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }
            return $temp_array;
        }

        $request = new Request;
        $results = (new StorefrontController)->index($request);
        $floorDis = unique_multidim_array($results,'floor');

        return view('lokale', [
            'results' => $results,
            'floorDis' => $floorDis
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
