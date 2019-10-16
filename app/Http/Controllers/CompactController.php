<?php

namespace App\Http\Controllers;

use App\Anounment;
use App\Blog;
use App\Product;
use App\Ps4Package;
use App\Publisher;
use Illuminate\Http\Request;

class CompactController extends Controller
{
    public function getCompact(){
        $products = Product::all();
        $packages = Ps4Package::all();
        $blogs = Blog::all();
        $claim = Anounment::all();
        $publisher = Publisher::all();
        return view('admin.adminPage', compact('products','packages','blogs','claim','publisher'));
    }
}
