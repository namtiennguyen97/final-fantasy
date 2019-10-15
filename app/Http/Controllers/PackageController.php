<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Ps4Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Ps4Package::paginate(5);
        return view('admin.packages.list', compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new Ps4Package();
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->old_price= $request->input('old_price');
        $package->detail = $request->input('detail');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $package->image = $path;
        }
        $package->save();
        return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Ps4Package::findOrFail($id);
        return view('user.showPackage', compact(['package']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packages = Ps4Package::findOrFail($id);
        return view('admin.packages.edit', compact('packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = Ps4Package::findOrFail($id);
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->old_price= $request->input('old_price');
        $package->detail = $request->input('detail');
            if ($request->hasFile('image')){
                $currentImg = $request->image;
                if ($currentImg){
                    Storage::delete('/public/'. $currentImg);
                }
                $image = $request->file('image');
                $path = $image->store('images','public');
                $package->image = $path;
            }
            $package->save();
            Session::flash('success','Cap nhat thanh cong');
            return redirect()->route('packages.index');
    }

    public function addCopy(Request $request, $id){
        $package = Ps4Package::findOrFail($id);
        $package= new Ps4Package();
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->old_price= $request->input('old_price');
        $package->detail = $request->input('detail');
        if ($request->hasFile('image')){
            $currentImg = $request->image;
            if ($currentImg){
                Storage::delete('/public/'. $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images','public');
            $package->image = $path;
        }
        $package->save();
        Session::flash('success','Cap nhat thanh cong');
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Ps4Package::findOrFail($id);
        $image = $package->image;
        if ($image){
            Storage::delete('/public/'.$image);
        }
        $package->delete();
        Session::flash('success','Xoa thanh cong');
        return redirect()->route('packages.index');
    }

    //
    public function userHome(){
        $package = Ps4Package::all();
        return view('user.index', compact('package'));
    }
}
