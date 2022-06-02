<?php

namespace App\Http\Controllers;

use App\Models\Storefront;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StorefrontController extends Controller
{
    public function index (Request $request){
        $data =Storefront::filter($request)->get();
        return json_encode($data);
        // return Storefront::filter($request)->get();
    }

    public function edit (Request $request){
        $data = Storefront::find($request->id);
        $data->available=$request->available;
        $data->visible=$request->visible;
        $data->save();

        return redirect('home');
    }
}
