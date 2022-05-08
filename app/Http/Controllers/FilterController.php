<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function testFilter($id){
        if($id =='undefined'){
            $data = DB::table('storefronts')->where('visible', 1)->get();
        }else{
            $data = DB::table('storefronts as store')->selectRaw('(Select name from storefronts where id = store.id) as name, (Select metric from storefronts where id = store.id) as metric, (Select floor from storefronts where id = store.id) as floor, (Select sanitary from storefronts where id = store.id) as sanitary, (Select buyPrice from storefronts where id = store.id) as buyPrice')->whereRaw('floor IN (' . $id . ')')->where('visible', 1)->get();
        }
        echo json_encode($data);
    }
}
