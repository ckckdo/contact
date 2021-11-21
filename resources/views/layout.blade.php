<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <style>
      /* ----------全体---------- */
      h1{
        font-size:20px;
        text-align:center;
      }
      .container{
        margin:100px,30px;
        font-size:12px;
      }

      /* ----------テーブル---------- */
      table{
        margin:0 auto;
      }
      th{
        width: 140px;
        vertical-align:baseline;
      }
      td{
        width: 520px;
        height:30px;
        vertical-align:baseline;
        text-align:left;
      }
      .require{
        color:red;
      }
      /* ----------入力例---------- */
      .exsample{
        display:flex;
        margin-left:20px;
      }
      .exsample p{
        font-size:10px;
        color:#888;
      }
      .firstname{
        margin-left:50%;
      }

      /* ----------お名前フォーム---------- */
      .input-form-name{
        display:flex;
        width: 100%;
        align-items:center;
      }
      .name-form1{
        border:1px,#888,solid;
        width: 48%;
        height:28px;
      }
      .name-form2{
        border:1px,#888,solid;
        width: 48%;
        height:28px;
        margin-left:4%;
      }

      /* ----------郵便番号フォーム---------- */
      .post{
        font-size:12px;
      }
      .post-form{
        width: 95%;
        height:28px;
      }

      /* ----------メールアドレス・住所・建物名のフォーム---------- */
      .form{
        width: 98%;
        height:28px;
      }
      .error{
        border:none;
        width: auto;
        font-size:12px;
      }
      ul{
        padding:0;
      }

      /* ----------性別　ラジオボタン ----------*/
      .radio {
        position: relative;
        padding-left: 28px;
        cursor: pointer;
        user-select: none;
      }
      .radio input {
          display: none;
        }

      /* 常に表示する円 */
      .radio-mark {
        position: absolute;
        top: -3; /* 上からの位置 */
        left: 0;
        height: 20px; /* 幅 */
        width: 20px; /* 幅 */
        border: solid 1px #d4dae2; /* 線 */
        border-radius: 50%;
        box-sizing: border-box;
        }
        /* 選択時に重ねる円 */
        .radio-mark:after {
          content: "";
          position: absolute;
          background: #000; /* 色 */
          height: 10px; /* 幅 */
          width: 10px; /* 幅 */
          border-radius: 50%;
          top: 4px;
          bottom: 4px;
          left: 4px;
          right: 4px;
          opacity: 0; /* 透明にしておく */
        }
      /* 選択されたとき */
        /* 上の円 */
        .radio input:checked + .radio-mark:after {
          opacity: 1; /* 透明を解除 */
        }

        /* ----------ご意見フォーム---------- */
        .textform{
          width: 98%;
          height:120px;
        }

        /* ----------ボタン---------- */
        .submit{
          text-align:center;
        }
        .btn{
          margin-top:30px;
          margin-bottom:10px;
          width: 120px;
          height:40px;
          color:#fff;
          background-color:#000;
          text-align:center;
          border:solid 1px #000;
          border-radius:3px;

        }
        .btn-top{
          text-decoration:none;
          display:block;
          width: 120px;
          height:30px;
          color:#fff;
          background-color:#000;
          font-size:15px;
          padding-top:8px;
          text-align:center;
          border:solid 1px #000;
          border-radius:3px;
        }
        li{
          text-align:center;
          font-size:10px;
          display:inline-block;
          list-style:none;
          width:12px;
          border:1px solid #d4dae2;
          padding:3px;
          margin:0;
        }
        li a{
          text-decoration:none;
        }
        li a:focus{
          background-color:#000;
          color:#fff;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>