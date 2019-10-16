<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Ps4Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(5);
        return view('admin.products.list', compact('product'));
    }

    public function userHome(){
        $product = Product::all();
        $package = Ps4Package::all();
        return view('user.index', compact('product','package'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->old_price = $request->input('old_price');
        $product->detail = $request->input('detail');
        //upload file hehe
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path =$image->store('images','public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('user.show', compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->old_price = $request->input('old_price');
        $product->detail = $request->input('detail');
        if ($request->hasFile('image')){
            //xoa anh cu neu co
            $currentImg = $product->image;
            if ($currentImg){
                Storage::delete('/public/'.$currentImg);
            }
            //them anh moi sau khi xoa
            $image = $request->file('image');
            $path = $image->store('images','public');
            $product->image = $path;
        }
        $product->save();
        Session::flash('success','Cập nhật thành công');
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $image = $product->image;
        if ($image){
            Storage::delete('/public/'.$image);
        }
        $product->categories()->delete();
        $product->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('products.index');
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        if (!$keyword){
            return redirect()->route('products.index');
        }
        $product = Product::where('name','LIKE','%'.$keyword.'%')->paginate(5);
        return view('user.index',compact('product'));
    }
    public  function selectAll(Request $request){
        $keyword = $request->input('keyword');
        if (!$keyword){
            return redirect()->route('products.index');
        }
        $product = Product::table('products')->select('name','price','old_price','detail','image')->get();
        return view('user.index',compact('product'));
    }

    public function count(){

    }

}














