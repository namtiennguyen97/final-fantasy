@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Chi tiết sản phẩm
    </div>

    <div class="row">

        @if(!isset($product))
            <p class="text-danger">Không có sản phẩn nào.</p>
        @else

            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: red">{{ $product->name }}</h5>
                        <img src="{{asset('storage/'.$product->image)}}" width="350" height="500">
                        <p class="card-text" style="color: red">Giá cũ: {{ $product->old_price }}$</p>
                        <p class="card-text " style="color: darkgreen">Giá mới: {{ $product->price }}$</p>
                        <p class="card-text " style="color: darkred">Thông tin: {{ $product->detail }}</p>
                        <a href="{{ route('user.index') }}" class="btn btn-primary">< Quay lại </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
