<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Ps4Package;
use Illuminate\Http\Request;

class CompactController extends Controller
{
    public function getCompact(){
        $products = Product::all();
        $packages = Ps4Package::all();
        $blogs = Blog::all();
        return view('admin.adminPage', compact('products','packages','blogs'));
    }
}
