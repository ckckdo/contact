@extends('layout')
@section('content')
<style>
  .container{
    width:100%;
    margin:0 auto;
  }
</style>
      <h1>お問い合わせ</h1>
        <div class="container">
            <form action="/contacts/confirm" method="post">
            @csrf
                <table>
                  <tr>
                    <th>お名前<span class="require">※</span></th>
                    <td><div class="input-form-name">
                        <input type="text" name="lastname" value="{{old('lastname')}}" class="name-form1">
                        <input type="text" name="firstname" value="{{old('firstname')}}" class="name-form2">
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
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>性別<span class="require">※</span></th>
                    <td>
                      <div class="input-radio">
                        <label class="radio"><input type="radio" name="gender" value="1" {{ old ('gender') == '1' ? 'checked' : '' }} checked><span class="radio-mark"></span>男性</label></input>
                        <label class="radio"><input type="radio" name="gender" value="2" {{ old ('gender') == '2' ? 'checked' : '' }}><span class="radio-mark"></span>女性</label></input>
                        @if ($errors->has('gender'))
                            <p class="error-message">{{ $errors->first('gender') }}</p>
                        @endif
                    </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>メールアドレス<span class="require">※</span></th>
                    <td><input type="email" name="email" class="form" value="{{old('email')}}">
                      <div class="exsample">
                          <p>例)test@exsample.com</p>
                      </div>
                        @if ($errors->has('email'))
                          <ul>
                              @foreach ($errors->get('email') as $message)
                                  <li class="error">{{ $message }}</li>
                              @endforeach
                          </ul>
                        @endif
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>郵便番号<span class="require">※</span></th>
                    <td>
                      <span class="post">〒</span><input type="text" name="zip" id="postcode" class="post-form" value="{{old('zip')}}" onKeyUp="AjaxZip3.zip2addr('zip', '', 'address', 'address');" onKeyUP="toHalfWidth(this);">
                      <div class="exsample">
                          <p>例)123-4567</p>
                      </div>
                        @if ($errors->has('zip'))
                          <ul>
                              @foreach ($errors->get('zip') as $message)
                                  <li class="error">{{ $message }}</li>
                              @endforeach
                          </ul>
                        @endif
                    </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>住所<span class="require">※</span></th>
                    <td>
                      <input type="text" name="address" class="form" value="{{old('address')}}">
                      <div class="exsample">
                          <p>例)東京都渋谷区千駄ヶ谷1-2-3</p>
                      </div>
                        @if ($errors->has('address'))
                            <p class="error-message">{{ $errors->first('address') }}</p>
                        @endif
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>建物名</th>
                    <td>
                    <input type="text" name="building_name" class="form" value="{{old('building_name')}}">
                      <div class="exsample">
                          <p>例)千駄ヶ谷マンション101</p>
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>ご意見<span class="require">※</span></th>
                    <td>
                      <input type="textarea" name="opinion" class="textform" value="{{old('opinion')}}">
                        @if ($errors->has('opinion'))
                            <ul>
                              @foreach ($errors->get('opinion') as $message)
                                  <li class="error">{{ $message }}</li>
                              @endforeach
                          </ul>
                        @endif
                    </td>
                  </tr>
                </table>
                <div class="submit">
                  <input type="submit" name="submit" value="確認" class="btn">
                </div>
            </form>
        </div>
<script src="{{ asset('js/rtv.js') }}"></script>
@endsection