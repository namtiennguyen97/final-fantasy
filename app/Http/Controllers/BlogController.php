<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blog = Blog::all();
      return view('admin.blogs.list', compact('blog'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->game = $request->input('game');
        $blog->content = $request->input('content');
        if ($request->hasFile('headImage')){
            $image = $request->file('headImage');
            $path =$image->store('images','public');
            $blog->headImage = $path;
        }
        if ($request->hasFile('image1')){
            $image = $request->file('image1');
            $path =$image->store('images','public');
            $blog->image1 = $path;
        }
//

//
        if ($request->hasFile('image2')){
            $image = $request->file('image2');
            $path =$image->store('images','public');
            $blog->image2 = $path;
        }
        if ($request->hasFile('image3')){
            $image = $request->file('image3');
            $path =$image->store('images','public');
            $blog->image3 = $path;
        }
        $blog->lastWord = $request->input('lastWord');
        $blog->save();
        return redirect()->route('blogs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('user.blog', compact(['blog']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->game = $request->input('game');
        if ($request->hasFile('headImage')){
            //xoa anh cu neu co
            $currentImg = $blog->headImage;
            if ($currentImg){
                Storage::delete('/public/'.$currentImg);
            }
            //them anh moi sau khi xoa
            $image = $request->file('headImage');
            $path = $image->store('images','public');
            $blog->headImage = $path;
        }

        if ($request->hasFile('image1')){
            //xoa anh cu neu co
            $currentImg = $blog->image1;
            if ($currentImg){
                Storage::delete('/public/'.$currentImg);
            }
            //them anh moi sau khi xoa
            $image = $request->file('image1');
            $path = $image->store('images','public');
            $blog->image1 = $path;
        }
        $blog->content = $request->input('content');

        if ($request->hasFile('image2')){
            //xoa anh cu neu co
            $currentImg = $blog->image2;
            if ($currentImg){
                Storage::delete('/public/'.$currentImg);
            }
            //them anh moi sau khi xoa
            $image = $request->file('image2');
            $path = $image->store('images','public');
            $blog->image2 = $path;
        }
        if ($request->hasFile('image3')){
            //xoa anh cu neu co
            $currentImg = $blog->image3;
            if ($currentImg){
                Storage::delete('/public/'.$currentImg);
            }
            //them anh moi sau khi xoa
            $image = $request->file('image3');
            $path = $image->store('images','public');
            $blog->image3 = $path;
        }
        $blog->lastWord =$request->input('lastWord');
        $blog->save();
        Session::flash('success','Cập nhật thành công');
        return redirect('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $image = $blog->headImage;
        $image2 = $blog->image1;
        $image3 = $blog->image2;
        $image4 = $blog->image3;
        if ($image && $image2 && $image3 && $image4){
            Storage::delete('/public/'.$image);
            Storage::delete('/public/'.$image2);
            Storage::delete('/public/'.$image3);
            Storage::delete('/public/'.$image4);
        }
        $blog->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('blogs.index');
    }

    //show in user
    public function userBlog(){
        $blog = Blog::paginate(3);
        return view('webPage', compact('blog'));
    }
    public function detailBlog($id){
        $blog = Blog::findOrFail($id);
        return view('user.blog', compact(['blog']));
    }
}
