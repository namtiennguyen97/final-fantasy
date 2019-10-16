@extends('layouts.admin')

@section('title', 'Add product')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: orangered">Thêm thông báo</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Tiêu đề</label>
                    <input type="text" class="form-control" name="title" >
                    {{--                    @error('name')--}}
                    {{--                    <div style="color: red">{{$message}}</div>--}}
                    {{--                    @enderror--}}
                </div>
                <div class="form-group">
                    <label >Nội dung</label>
                    <input type="text" class="form-control " rows="3" name="content" >
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>

@endsection
