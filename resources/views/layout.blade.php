<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <style>
      h1{
        font-size:20px;
        text-align:center;
      }
      .container{
        margin:100px,30px;
        font-size:14px;
      }
      .form-group{
        display:flex;
        justify-content:space-between;
        margin:10px;
      }
      .label{
        width: 30%;
      }
      .require{
        color:red;
      }
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
      .input-form{
        width: 100%;
        align-items:center;
        flex-flow:row,wrap;
      }
      .input-form-name{
        display:flex;
        width: 100%;
        align-items:center;
      }
      .input-radio{
        width: 80%;
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
      .post-form{
        width: 95%;
        height:28px;
      }
      .form{
        width: 98%;
        height:28px;
      }
      label {
        position: relative;
        cursor: pointer;
        padding-left: 30px;
      }

      label::before,
      label::after {
        content: "";
        display: block;
        border-radius: 50%;
        position: absolute;
        transform: translateY(-50%);
        top: 50%;
      }

      label::before {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        left: 5px;
      }

      label::after {
        background-color: #000;
        border-radius: 50%;
        opacity: 0;
        width: 8px;
        height: 8px;
        left: 12px
      }

      input:checked + label::after {
        opacity: 1;
      }

      .radio {
        position: absolute;
        white-space: nowrap;
        border: 0;
        clip: rect(0 0 0 0);
        clip-path: inset(50%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        margin: -1px;
        padding: 0;
        }
        .textform{
          width: 98%;
          height:120px;
        }
        .submit{
          text-align:center;
        }
        .btn{
          width: 120px;
          height:40px;
          color:#fff;
          background-color:#000;
          text-align:center;
          border:solid,1px,#000;
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
          border:solid,1px,#000;
          border-radius:3px;
        }
        .text-center{
          height:100vh;
          display:flex;
          flex-direction:column;
          justify-content:center;
          align-items:center;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>