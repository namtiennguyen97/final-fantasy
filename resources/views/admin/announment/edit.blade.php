@extends('layouts.admin')

@section('title', 'Cập nhật thông báo')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Chỉnh sửa thông tin</h2>
        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('announment.update', $claim->id) }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label>Tiêu đề quảng cáo:</label>

                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $claim->title }}">
                    @error('title')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label>Nội dung quảng cáo</label>
                    <textarea  type="text"  class="form-control  @error('content') is-invalid @enderror" rows="3" name="content"  required>{{ $claim->content }}</textarea>
                    @error('content')
                    <div style="color: red">{{$message}}</div>
                    @enderror

                    <div class="form-group">
                        <label>Pop-up:</label>

                        <input type="text" class="form-control @error('pop_up') is-invalid @enderror" name="pop_up" value="{{ $claim->pop_up }}">
                        @error('pop_up')
                        <div style="color: red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ảnh Slice quảng cáo:</label>
                        <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror " style="width: 300px">
                        @error('image')
                        <div style="color: red">{{$message}}</div>
                        @enderror
                        <a style="color: red"> Lưu ý: Ảnh Slide quảng cáo sẽ xuất hiện trên trang mua sắm, kích thước khuyến nghị là 1600x800 trở lên!</a>
                    </div>

                <button type="submit" class="btn btn-primary">Confirm Edit</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

                </div>
            </form>

        </div>

    </div>


@endsection
