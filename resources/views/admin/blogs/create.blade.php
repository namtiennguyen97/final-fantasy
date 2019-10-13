@extends('layouts.admin')

@section('title', 'Add product')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: orangered">Thêm bài viết</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Nhan de</label>
                    <input type="text" class="form-control" name="title" >
                </div>

                <div class="form-group">
                    <label >Game</label>
                    <input type="text" class="form-control " rows="3" name="game" >
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh bìa</label>
                    <input type="file" name="headImage" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh dau bai</label>
                    <input type="file" name="image1" class="form-control-file">
                </div>

                <div class="form-group">
                    <label >Noi dung</label>
                    <textarea  class="form-control" name="content" ></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh than bai 1:</label>
                    <input type="file" name="image2" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh than bai 2:</label>
                    <input type="file" name="image3" class="form-control-file">
                </div>
                <div class="form-group">
                    <label >Ket bai</label>
                    <textarea  class="form-control" name="lastWord" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
@endsection
