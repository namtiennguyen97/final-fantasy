@extends('layouts.admin')
@section('title','Admin Blogger')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Quản lý bài viết</h1>
        </div>
        <a class="btn btn-primary" style="background-color: green" href="{{route('blogs.create')}}">Thêm bài viết!</a>
        <a class="btn btn-primary" style="background-color: rebeccapurple" href="{{route('announment.index')}}">Mục phụ-Thông báo!</a>

        <div class="col-12">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{ \Illuminate\Support\Facades\Session::get('success') }}
                </p>
            @endif
        </div>
        <table class="table table-striped">
            <thead>
            <tr style="background-color: #636b6f">
                <th style="color: orange" scope="col">STT</th>
                <th style="color: orange" scope="col">Tiêu đề</th>
                <th style="color: orange" scope="col">Game</th>
                <th style="color: orange" scope="col">Ảnh đại diện</th>
                <th style="color: orange" scope="col">Ảnh đại diện 2</th>
                <th style="color: orange" scope="col">Nội dung</th>
                <th style="color: orange" scope="col">Ảnh dẫn dắt</th>
                <th style="color: orange" scope="col">Ảnh dẫn dắt</th>
                <th style="color: orange" scope="col">Kết bài</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($blog)==0)
                <tr><td colspan="4">Không có dữ liệu</td></tr>
            @else
                @foreach($blog as $key => $value)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td><textarea readonly style="height: 90px; width: 90px">{{$value->title}}</textarea></td>
                        <td>{{$value->game}}</td>
                        <td><img src="{{asset("storage/".$value->headImage)}}" style="width: 90px;height: 90px"> </td>
                        <td><img src="{{asset("storage/".$value->image1)}}" style="width: 90px;height: 90px"> </td>
                        <td><textarea readonly style="height: 90px">{{$value->content}}</textarea></td>
                        <td><img src="{{asset("storage/".$value->image2)}}" style="width: 90px;height: 90px"> </td>
                        <td><img src="{{asset("storage/".$value->image3)}}" style="width: 90px;height: 90px"> </td>
                        <td><textarea readonly style="height: 90px">{{$value->lastWord}}</textarea></td>
                        <td><a class="btn btn-primary" style="background-color: green" href="{{route('blogs.edit',$value->id)}}">Edit</a></td>
                        <td><a href="{{route('blogs.destroy',$value->id)}}" class="btn btn-primary" style="background-color: red" onclick="return confirm('Do you want to delete your product?')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        <a class="btn btn-primary" style="background-color: orange" href="{{route('admin.page')}}">Về danh mục kiểm soát!</a>
        <a class="btn btn-primary" href="{{route('webPage')}}">Home Page</a>

    </div>

@endsection
