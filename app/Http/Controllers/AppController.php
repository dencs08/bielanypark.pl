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
        $metricMin = DB::table('storefronts')->min('metric');
        $metricMax = DB::table('storefronts')->max('metric');
        $buyPriceMin = DB::table('storefronts')->min('buyPrice');
        $buyPriceMax = DB::table('storefronts')->max('buyPrice');
        $rentPriceMin = DB::table('storefronts')->min('rentPrice');
        $rentPriceMax = DB::table('storefronts')->max('rentPrice');

        
        // $floors_decoded = json_decode($floors, false);
        return view('lokale', [
            'results' => $results,
            'floors' => $floors,
            'metrics' => [$metricMin,$metricMax],
            'buyPrices' => [$buyPriceMin,$buyPriceMax]
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
