@extends('layouts.admin')

@section('title', 'Thêm thông báo!')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: orangered">Thêm thông báo</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('announment.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Tiêu đề</label>
                    <input type="text" class="form-control   @error('title') is-invalid @enderror" name="title" >
                                        @error('title')
                                        <div style="color: red">{{$message}}</div>
                                        @enderror
                </div>

                <div class="form-group">
                    <label >Pop-up</label>
                    <input type="text" class="form-control @error('pop_up') is-invalid @enderror " rows="3" name="pop_up" >
                    @error('pop_up')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <a style="color: red">Lưu ý: Dòng pop-up sẽ suất hiện trên thanh quảng cáo trang mua sắm, hãy viết ngắn gọn không dài dòng tránh trường hợp mất thẩm mĩ</a>

                <div class="form-group">
                    <label >Tóm tắt thông tin quảng cáo</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="3" name="content" ></textarea>
                    @error('content')
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
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>

@endsection
