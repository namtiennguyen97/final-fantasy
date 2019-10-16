@extends('layouts.admin')
@section('title','Admin Announment')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Quản lý thông báo ngắn</h1>
        </div>
        <a class="btn btn-primary" style="background-color: green" href="{{route('announment.create')}}">Viết thông báo!</a>
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
                <th style="color: orange" scope="col">Nội dung POP-Up</th>
                <th style="color: orange" scope="col">Pop-up</th>
                <th style="color: orange" scope="col">Ảnh Slide</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($claim)==0)
                <tr><td colspan="4">Không có thông báo nào!</td></tr>
            @else
                @foreach($claim as $key => $value)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$value->title}}</td>
                        <td><textarea readonly style="height: 90px">{{$value->content}}</textarea></td>
                        <td>{{$value->pop_up}}</td>
                        <td><img src="{{asset("storage/".$value->image)}}" style="width: 90px;height: 90px"> </td>
                        <td><a class="btn -btn-primary" style="background-color: gold" href="{{route('announment.edit', $value->id)}}">Edit</a></td>
                        <td><a href="{{route('announment.destroy', $value->id)}}" class="btn btn-primary" style="background-color: red" onclick="return confirm('Do you want to delete your announment?')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a class="btn btn-primary" style="background-color: orange" href="{{route('admin.page')}}">Về danh mục kiểm soát!</a>
        <a class="btn btn-primary" href="{{route('webPage')}}">Home Page</a>
        <a class="btn btn-primary" style="background-color: orange;" href="{{route('user.index')}}">WebShop</a>
    </div>
    {{--    <a href="{{ route('admin.logout') }}">--}}
    {{--        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>--}}
    {{--    </a>--}}
    {{$claim->links()}}
@endsection
