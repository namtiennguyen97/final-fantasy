@extends('layouts.admin')

@section('title', 'Cập nhật thong bao')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Chỉnh sửa thông tin</h2>
        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('products.edit', $product->id) }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label>Tên sản phẩm:</label>

                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>

                </div>

                <div class="form-group">

                    <label>Giá</label>

                    <input  type="text"  class="form-control" rows="3" name="price" value=" {{ $product->price }}" required>

                </div>
                <div class="form-group">

                    <label>Giá cũ</label>

                    <input  type="text" class="form-control" rows="3" name="old_price" required value="{{ $product->old_price }} " >

                </div>
                <div class="form-group">

                    <label>Thông tin chi tiết</label>

                    <textarea class="form-control" rows="3" name="detail"  required>{{ $product->detail }} </textarea>

                </div>

                <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control-file">

                </div>

                <button type="submit" class="btn btn-primary">Confirm Edit</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>


@endsection
