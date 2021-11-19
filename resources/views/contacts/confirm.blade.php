@extends('layout')
@section('content')
    <div class="container">
        <h1 class="ttl">お問い合わせ確認</h1>
        <div class="container">
            <form action="/contacts/send" method="post">
            @csrf
                <div class="form-group">
                    <p class="label">お名前</p>
                    <p>{{$inputs->lastname.$inputs->firstname}}</p>
                    <input type="hidden" name="lastname" value="{{$input->lastname}}">
                    <input type="hidden" name="firstname" value="{{$input->firstname}}">
                </div>
                <div class="form-group">
                    <p class="label">メールアドレス</p>
                    <p>{{$inputs->email}}</p>
                    <input type="hidden" name="email" value="{{$input->email}}">
                </div>
                <div class="form-group">
                    <p class="label">性別</p>
                    <p>{{$inputs->gender}}</p>
                    <input type="hidden" name="gender" value="{{$input->gender}}">
                </div>

                <div class="form-group">
                    <p class="label">郵便番号</p>
                    <p>{{$inputs->postcode}}</p>
                    <input type="hidden" name="postcode" value="{{$input->postcode}}">
                </div>
                <div class="form-group">
                    <p class="abel">住所</p>
                    <p>{{$inputs->address}}</p>
                    <input type="hidden" name="address" value="{{$input->address}}">
                </div>
                <div class="form-group">
                    <p class="label">建物名</p>
                    <p>{{$inputs->building_name}}</p>
                    <input type="hidden" name="building_name" value="{{$input->building-name}}">
                </div>
                <div class="form-group">
                    <p class="label">ご意見</p>
                    <p>{{$inputs->opinion}}</p>
                    <input type="hidden" name="opinion" value="{{$input->opinion}}">
                </div>

                <div class="text-center">
                   <button name="action" type="submit" value="submit" class="btn">送信</button>
                    <a href="/contacs">修正する</a>
                </div>
            </form>
        </div>
    @endsection