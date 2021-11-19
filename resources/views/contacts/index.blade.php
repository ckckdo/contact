@extends('layout')
@section('content')
      <h1>お問い合わせ</h1>
        <div class="container">
            <form action="/contacts/confirm" method="post">
            @csrf
                <div class="form-group">
                    <p class="label">お名前<span class="require">※</span></p>
                    <div class="input-form">
                      <div class="input-form-name">
                        <input type="text" name="lastname" class="name-form1">
                        <input type="text" name="firstname" class="name-form2">
                      </div>
                      <div class="exsample">
                          <p>例)山田</p><p class="firstname">例)太郎</p>
                      </div>
                        @if ($errors->has('lastname'))
                            <p class="error-message">{{ $errors->first('lastname') }}</p>
                        @endif
                        @if ($errors->has('firstname'))
                            <p class="error-message">{{ $errors->first('firstname') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">性別<span class="require">※</span></p>
                    <div class="input-radio">
                        <input type="radio" name="gender" class="radio" checked="checked" value="1" {{ old ('gender') == '男性' ? 'checked' : '' }} checked><label for="male">男性</label></input>
                        <input type="radio" name="gender" class="radio"value="2" {{ old ('gender') == '女性' ? 'checked' : '' }}><label for="female">女性</label></input>
                        @if ($errors->has('gender'))
                            <p class="error-message">{{ $errors->first('gender') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">メールアドレス<span class="require">※</span></p>
                    <div class="input-form">
                        <input type="email" name="email" class="form">
                      <div class="exsample">
                          <p>例)test@exsample.com</p>
                      </div>
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <p class="label">郵便番号<span class="require">※</span></p>
                    <div class="input-form">
                        <span>〒</span><input type="text" name="postcode" class="post-form">
                      <div class="exsample">
                          <p>例)123-4567</p>
                      </div>
                        @if ($errors->has('postcode'))
                            <p class="error-message">{{ $errors->first('postcode') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">住所<span class="require">※</span></p>
                    <div class="input-form">
                        <input type="text" name="address" class="form">
                      <div class="exsample">
                          <p>例)東京都渋谷区千駄ヶ谷1-2-3</p>
                      </div>
                        @if ($errors->has('address'))
                            <p class="error-message">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">建物名</p>
                    <div class="input-form">
                        <input type="text" name="building_name" class="form">
                      <div class="exsample">
                          <p>例)千駄ヶ谷マンション101</p>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">ご意見<span class="require">※</span></p>
                    <div class="input-form">
                        <input type="textarea" name="opinion" class="textform">
                        @if ($errors->has('opinion'))
                            <p class="error-message">{{ $errors->first('opinion') }}</p>
                        @endif
                    </div>
                </div>
                <div class="submit">
                  <input type="submit" name="submit" value="確認" class="btn">
                </div>
            </form>
        </div>
@endsection