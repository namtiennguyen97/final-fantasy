@extends('layouts.admin')
@section('title','Admin Product')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Quản lý sản phẩm</h1>
        </div>
        <a class="btn btn-primary" style="background-color: green" href="{{route('products.create')}}">Thêm hàng!</a>
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
                <th style="color: orange" scope="col">Giá</th>
                <th style="color: orange" scope="col">Giá cũ</th>
                <th style="color: orange" scope="col">Chi tiết</th>
                <th style="color: orange" scope="col">Ảnh bìa</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($product)==0)
                <tr><td colspan="4">Không có dữ liệu</td></tr>
            @else
                @foreach($product as $key => $value)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->price}}</td>
                        <td>{{$value->old_price}}</td>
                        <td><textarea readonly style="height: 90px">{{$value->detail}}</textarea></td>
                        <td><img src="{{asset("storage/".$value->image)}}" style="width: 90px;height: 90px"> </td>
                        <td><a class="btn -btn-primary" style="background-color: gold" href="{{route('products.edit', $value->id)}}">Edit</a></td>
                        <td><a href="{{route('products.destroy', $value->id)}}" class="btn btn-primary" style="background-color: red" onclick="return confirm('Do you want to delete your product?')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        <a class="btn btn-primary" style="background-color: orange" href="{{route('admin.page')}}">Về danh mục kiểm soát!</a>
        <a class="btn btn-primary" href="{{route('webPage')}}">Home Page</a>
        <a class="btn btn-primary" style="background-color: orange;" href="{{route('user.index')}}">WebShop</a>
        <a class="btn btn-primary" href="{{route('admin.page')}}">Back</a>
    </div>
{{--    <a href="{{ route('admin.logout') }}">--}}
{{--        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>--}}
{{--    </a>--}}
{{$product->links()}}
@endsection
