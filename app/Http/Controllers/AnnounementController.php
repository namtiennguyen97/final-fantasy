<?php

namespace App\Http\Controllers;

use App\Anounment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnnounementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claim = Anounment::paginate(5);
        return view('admin.announment.list', compact('claim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $claim = new Anounment();
            $claim->title = $request->input('title');
            $claim->content= $request->input('content');
            $claim->save();
            Session::flash('success','Thêm mới thành công!');
            return redirect()->route('announment.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $claim = Anounment::findOrFail($id);
        return view('admin.announment.edit', compact('claim'));
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
        $claim = Anounment::findOrFail($id);
        $claim->title = $request->input('title');
        $claim->content = $request->input('content');
        $claim->save();
        Session::flash('success','Update compeleted!');
        return redirect()->route('announment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $claim = Anounment::findOrFail($id);
        $claim->delete();
        return redirect()->route('announment.index');
    }
}
