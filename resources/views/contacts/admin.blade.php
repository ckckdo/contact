@extends('layout')
@section('content')
      <h1>管理システム</h1>
        <div class="container">
          <div class="search">
            <div class="form-group">
                    <p class="label">お名前<span class="require">※</span></p>
                    <div class="input-form">
                      <div class="input-form-name">
                        <input type="text" name="name" class="name-form1">
                      </div>
            <div class="form-group">
                      <p class="label">性別<span class="require">※</span></p>
                    <div class="input-radio">
                        <input type="radio" name="gender" class="radio" checked="checked" value="1" {{ old ('gender') == '男性' ? 'checked' : '' }} checked><label for="male">男性</label></input>
                        <input type="radio" name="gender" class="radio"value="2" {{ old ('gender') == '女性' ? 'checked' : '' }}><label for="female">女性</label></input>
              </div>
              
          </div>
        </div>
@endsection