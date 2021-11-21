@extends('layout')
@section('content')
<style>
  th,td{
    font-size:12px;
    height:50px;
    text-align:left;
  }
  /* -----------ボタン---------- */
  .text-center{
    text-align:center;
  }
  a{
    display:block;
    color:#000;
  }
</style>
    <div class="container">
        <h1 class="ttl">お問い合わせ確認</h1>
        <div class="container">
            <form action="{{ route('send') }}" method="post">
            @csrf
            {{method_field('get')}}
                <table>
                  <tr>
                    <th>お名前</th>
                    <td>
                      {{$inputs['lastname'].$inputs['firstname']}}
                    <input type="hidden" name="lastname" value="{{$inputs['lastname']}}">
                    <input type="hidden" name="firstname" value="{{$inputs['firstname']}}">
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>性別</th>
                    <td>
                      {{$inputs['gender']}}
                    <input type="hidden" name="gender" value="{{$inputs['gender']}}">
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>メールアドレス</th>
                    <td>
                      {{$inputs['email']}}
                    <input type="hidden" name="email" value="{{$inputs['email']}}">
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>郵便番号</th>
                    <td>
                      {{$inputs['postcode']}}
                    <input type="hidden" name="postcode" value="{{$inputs['postcode']}}">
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>住所</th>
                    <td>
                      {{$inputs['address']}}
                    <input type="hidden" name="address" value="{{$inputs['address']}}">
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>建物名</th>
                    <td>
                      {{$inputs['building_name']}}
                    <input type="hidden" name="building_name" value="{{$inputs['building_name']}}">
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th>ご意見</th>
                    <td>
                      {{$inputs['opinion']}}
                    <input type="hidden" name="opinion" value="{{$inputs['opinion']}}">
                    </td>
                  </tr>
                </table>

                <div class="text-center">
                  <button name="action" type="submit" value="submit" class="btn">送信</button>
                    <a href="/contacts">修正する</a>
                </div>
            </form>
        </div>
    @endsection