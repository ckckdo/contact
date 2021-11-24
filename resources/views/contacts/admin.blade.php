@extends('layout')
<style>
  .container{
    width:100%;
    margin:30px;
  }
  .search{
    margin:0 auto;
    width: 80%;
    border:1px #000 solid;
    padding:30px;
  }
  .search-index{
    width: 80%;
    margin:0 auto;
  }
  /* ----------各フォーム---------- */
  .keyword-form{
    width: 40%;
    height:28px;
  }
  .gender-th{
    font-weight:bold;
    margin-left:30px;
  }
  /* ----------テーブル---------- */
  .admin-table{
    width: 100%;
    margin:0 auto;
  }
  th,td{
    font-size:12px;
    height:50px;
    text-align:left;
  }
  .search-table{
    width: 100%;
  }
  .search-th,.search-td{
    width:100px;
    white-space: nowrap;
  }
  .input-radio{
    width: 165px;
    display:inline-block;
  }
  /* ----------ページネート---------- */
  svg.w-5.h-5 {
    width: 30px;
    height: 30px;
    }
  .paginate{
    width:100%;
    display:flex;
    justify-content:space-between;
  }
  /* -----------ボタン---------- */
  .text-center{
    text-align:center;
  }
  a{
    display:block;
    color:#000;
  }
  .btn-delete{
    font-size:10px;
    width: 50px;
    padding:3px 5px;
    background-color:#000;
    color:#fff;
    text-align:center;
    border:1px solid #000;
    border-radius:3px;
  }
</style>
@section('content')
      <h1>管理システム</h1>
        <div class="container">

<!---------------------- 検索フォーム ---------------------->
          <div class="search">
          <form action="/contacts/admin" method="get">
          {{ csrf_field()}}
          {{method_field('get')}}
            <table class="admin-table">
              <tr>
                <th>お名前</th>
                <td><input type="text" name="keyword" class="keyword-form" value="{{ $params['keyword'] ?? null }}">
                <span class="gender-th">性別</span>
                <div class="input-radio">
                          <label class="radio"><input type="radio" name="gender" value="" {{ old ('gender') == '1' && old ('gender') == '2' ? 'checked' : '' }} checked><span class="radio-mark"></span>全て</label></input>
                          <label class="radio"><input type="radio" name="gender" value="1" {{ old ('gender') == '1' ? 'checked' : '' }}><span class="radio-mark"></span>男性</label></input>
                          <label class="radio"><input type="radio" name="gender" value="2" {{ old ('gender') == '2' ? 'checked' : '' }}><span class="radio-mark"></span>女性</label></input>
                  </td>
              </tr>
            </table>
            <table class="admin-table">
              <tr>
                <th aline="left">登録日</th>
                <td>
                <input type="date" name="from" class="keyword-form"><span>~</span>
                <input type="date" name="until" class="keyword-form">
                </td>
              </tr>
            </table>
            <table class="admin-table">
              <tr>
                <th>メールアドレス</th>
                <td><input type="text" name="keyword-email" class="keyword-form"></td>
              </tr>
            </table>
          <div class="text-center">
                  <button name="action" type="submit" value="submit" class="btn">検索</button>
                  <a href="/contacts/admin">リセット</a>
          </div>
        </form>
        </div>
<!---------------------- 検索結果 ---------------------->
        <div class="search-index">
          <div class="paginate">
            @if (count($contacts) >0)
            <p>全{{ $contacts->total() }}件中
            {{  ($contacts->currentPage() -1) * $contacts->perPage() + 1}} ~
            {{ (($contacts->currentPage() -1) * $contacts->perPage() + 1) + (count($contacts) -1)  }}件</p>
            @endif
            {{ $contacts->links('vendor.pagination.default') }}

          </div>
          @if(isset($contacts))
          <table class="search-table">
            <tr>
              <th class="search-th">ID</th>
              <th class="search-th">お名前</th>
              <th class="search-th">性別</th>
              <th class="search-th">メールアドレス</th>
              <th class="search-th">ご意見</th>
            </tr>
              @foreach($contacts as $contact)
            <tr>
              <td class="search-td">{{$contact->id}}</td>
              <td class="search-td">{{$contact->lastname.$contact->firstname}}</td>
              <td class="search-td">{{$contact->gender}}</td>
              <td class="search-td">{{$contact->email}}</td>
              <td class="search-td"><p class="str" title="{{$contact->opinion}}">{{Str::limit($contact->opinion, 50, '...')}}</p></td>
              <td class="search-td"><form action="/contacts/delete" method="post">@csrf
                  <input type="hidden" name="id" value={{$contact->id}}>
                  <input type="submit" class="btn-delete" value="削除">
              </form></td>
            </tr>
              @endforeach
          </table>
          @endif
        </div>
      </div>
@endsection