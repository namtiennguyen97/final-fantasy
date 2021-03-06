@extends('layouts.master')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('login-fail'))
        <div class="login-fail">
            <p>{{\Illuminate\Support\Facades\Session::get('login-fail')}}</p>
        </div>
    @endif
    <div class="title m-b-md">
        Admin
    </div>
    <div class="form-login">
        <form class="text-left" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter username"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
            <button style="background-color: orange" class="btn btn-primary"><a href="{{route('webPage')}}">Quay về trang chủ</a></button>

        </form>
    </div>
@endsection
