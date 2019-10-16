@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Chi tiết sản phẩm
    </div>

    <div class="row">

        @if(!isset($package))
            <p class="text-danger">Không có sản phẩm nào.</p>
        @else

            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: red">{{ $package->name }}</h5>
                        <img src="{{asset('storage/'.$package->image)}}" width="350" height="500">
                        <p class="card-text" style="color: red">Giá cũ: {{ $package->old_price }}$</p>
                        <p class="card-text " style="color: darkgreen">Giá mới: {{ $package->price }}$</p>
                        <p class="card-text " style="color: darkred">Thông tin: {{ $package->detail }}</p>
                        <p class="card-text" style="color: darkblue">Hãng sản xuất:{{$package->publisher->name}}</p>
                        <p class="card-text" style="color: darkblue">Phiên bản:{{$package->publisher->version}}</p>
                        <a href="{{ route('user.index') }}" class="btn btn-primary">< Quay lại </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
