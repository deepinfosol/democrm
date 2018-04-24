<?php

namespace App\Http\Controllers\Masters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductBrand;

class BrandController extends Controller
{
    //
    public function index(){
        $list = ProductBrand::get();
        return view('masters.productbrand.index',['brands'=>$list]);
        
    }
}
