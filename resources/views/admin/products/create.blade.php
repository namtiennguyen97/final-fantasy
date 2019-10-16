@extends('layouts.admin')

@section('title', 'Add product')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: orangered">Thêm sản phẩm</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Tên sản phẩm</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror   " name="name" >
                    @error('name')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label >Giá</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror " rows="3" name="price" >
                    @error('price')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label >Giá cũ:</label>
                    <input type="text" class="form-control  @error('old_price') is-invalid @enderror " name="old_price" >
                    @error('old_price')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label >Chi tiết:</label>
                    <textarea  class="form-control @error('detail') is-invalid @enderror  " name="detail" ></textarea>
                    @error('detail')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label for="exampleFormControlFile1">Ảnh bìa</label>

                    <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror " style="width: 300px">
                    @error('image')
                    <div style="color: red">{{$message}}</div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>

@endsection
