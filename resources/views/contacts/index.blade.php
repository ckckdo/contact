<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
</head>
<body>
    <div class="container">
        <h1 class="ttl">お問い合わせ</h1>
        <div class="container">
            <form action="/contacts/confirm" method="post">
            @csrf
                <div class="form-group">
                    <p class="label">お名前<span class="require">※</span></p>
                    <div class="input-form">
                        <input type="text" name="lastname" class="name-form">
                        <input type="text" name="firstname" class="name-form">
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
                        <input type="radio" name="gender" class="radio" checked="checked">男性</input>
                        <input type="radio" name="gender" class="radio">女性</input>
                        @if ($errors->has('gender'))
                            <p class="error-message">{{ $errors->first('gender') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">メールアドレス<span class="require">※</span></p>
                    <div class="input-form">
                        <input type="email" name="email" class="form">
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <p class="label">郵便番号<span class="require">※</span></p>
                    <div class="input-form">
                        <p>〒</p><input type="text" name="postcode" class="form">
                        @if ($errors->has('postcode'))
                            <p class="error-message">{{ $errors->first('postcode') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">住所<span class="require">※</span></p>
                    <div class="input-form">
                        <input type="text" name="address" class="form">
                        @if ($errors->has('address'))
                            <p class="error-message">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <p class="label">建物名</p>
                    <div class="input-form">
                        <input type="text" name="building_name" class="form">
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
                  <input type="submit" name="submit" value="確認">
                </div>
            </form>
        </div>
    </div>
</body>
</html>