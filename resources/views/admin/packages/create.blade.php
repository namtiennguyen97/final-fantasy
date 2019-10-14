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
                    <input type="text" class="form-control" name="name" >
                    {{--                    @error('name')--}}
                    {{--                    <div style="color: red">{{$message}}</div>--}}
                    {{--                    @enderror--}}
                </div>

                <div class="form-group">
                    <label >Giá</label>
                    <input type="text" class="form-control " rows="3" name="price" >
                </div>

                <div class="form-group">
                    <label >Giá cũ:</label>
                    <input type="text" class="form-control" name="old_price" >
                </div>
                <div class="form-group">
                    <label >Chi tiết:</label>
                    <textarea  class="form-control" name="detail" ></textarea>
                </div>
                <div class="form-group">
                    ìa
                    <label for="exampleFormControlFile1">Ảnh bia</label>

                    <input type="file" name="image" class="form-control-file">

                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>
@endsection
