<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storefront;
use Illuminate\Support\Facades\DB;
class AppController extends Controller
{
    public function start(){
        return view('start', [
            //parameters
        ]);
    }

    public function lokale(){
        $request = new Request;
        $results = (new StorefrontController)->index($request);

        $floors = DB::table('storefronts')->select('floor')->distinct()->get();

        return view('lokale', [
            'results' => $results,
            'floors' => $floors
        ]);
    }

    public function lokalID($name){
        $storeFronts = Storefront::all();
        $storeFrontArr = json_decode($storeFronts, true);

        $dataName = [];

        $storeFronts = DB::select('select * from storefronts where name = ?', [$name]);

        return view('lokalID', [
            'storeFrontName' => $dataName[$name] ?? 'Lokal o nazwie ' . $name . ' nie istnieje',
            'storeFront' => $storeFronts,
        ]);
    }

    public function polityka(){
        return view('polityka', [
            //parameters
        ]);
    }
}
