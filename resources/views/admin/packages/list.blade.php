@extends('layouts.admin')
@section('title','Admin Product')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Quản lý sản phẩm</h1>
        </div>
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
                <th style="color: orange" scope="col">Tên sản phẩm</th>
                <th style="color: orange" scope="col">Chi tiết</th>
                <th style="color: orange" scope="col">Giá</th>
                <th style="color: orange" scope="col">Giá cũ</th>
                <th style="color: orange" scope="col">Ảnh bìa</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($package)==0)
                <tr><td colspan="4">Không có dữ liệu</td></tr>
            @else
                @foreach($package as $key => $value)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$value->name}}</td>
                        <td><textarea readonly style="height: 90px">{{$value->detail}}</textarea></td>
                        <td>{{$value->price}}</td>
                        <td>{{$value->old_price}}</td>
                        <td><img src="{{asset("storage/".$value->image)}}" style="width: 90px;height: 90px"> </td>
                        <td><a class="btn -btn-primary" style="background-color: gold" href="{{route('packages.edit', $value->id)}}">Edit</a></td>
                        <td><a href="{{route('packages.destroy', $value->id)}}" class="btn btn-primary" style="background-color: red" onclick="return confirm('Do you want to delete your product?')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('packages.create')}}">Thêm hàng!</a>
        <a class="btn btn-primary" style="background-color: orange" href="{{route('admin.page')}}">Về danh mục kiểm soát!</a>
        <a class="btn btn-primary" href="{{route('webPage')}}">Home Page</a>
        <a class="btn btn-primary" style="background-color: orange;" href="{{route('user.index')}}">WebShop</a>
        <a class="btn btn-primary" href="{{route('admin.page')}}">Back</a>
    </div>
    {{$package->links()}}
{{--    {{$product->links()}}--}}
@endsection
