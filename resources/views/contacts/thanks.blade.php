@extends('layout')
@section('content')
<style>
    .text-center{
        height:100vh;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        }
</style>
    <div class="text-center">
        <p class="text">お問い合わせありがとうございました。</p>
        <a href="{{ route('contacts') }}" class="btn-top">トップページへ</a>
    </div>
</body>
</html>