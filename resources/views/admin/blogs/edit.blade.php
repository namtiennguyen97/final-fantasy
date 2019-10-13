@extends('layouts.admin')

@section('title', 'Cập nhật Blog')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Chỉnh sửa thông tin</h2>
        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('blogs.edit', $blog->id) }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label>Tiêu đề:</label>

                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>

                </div>

                <div class="form-group">

                    <label>Game</label>

                    <input  type="text"  class="form-control" rows="3" name="price" value=" {{ $blog->game }}" required>

                </div>
                <div class="form-group">


                    <div class="form-group">

                        <label>Ảnh bìa</label>

                        <input type="file" name="headImage" class="form-control-file" >

                    </div>


                    <div class="form-group">

                        <label>Ảnh 1:</label>

                        <input type="file" name="image1" class="form-control-file" >

                    </div>
                    <div class="form-group">

                        <label>Nội dung</label>

                        <textarea class="form-control" rows="3" name="content"  required> {{$blog->content}}</textarea>

                    </div>


                <div class="form-group">

                    <label>Ảnh 2:</label>

                    <input type="file" name="image2" class="form-control-file" >

                </div>

                    <div class="form-group">

                        <label>Ảnh 3:</label>

                        <input type="file" name="image3" class="form-control-file" >

                    </div>
                    <div class="form-group">

                        <label>Kết bài:</label>

                        <textarea class="form-control" rows="3" name="lastWord"  required> {{$blog->lastWord}}</textarea>

                    </div>


                    <button type="submit" class="btn btn-primary">Confirm Edit</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </div>
            </form>

        </div>

    </div>


@endsection
