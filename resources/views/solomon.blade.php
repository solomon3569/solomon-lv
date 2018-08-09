@extends('layouts.app')

@section('script')
<script>
</script>
@endsection

@section('content')
<body>
    <div class="container_me container-fluid">
        <div class="myphoto">
            <div class="img">
                <img src="/pic/IMG_0590.JPG" alt="Us">
            </div>
            <h1>Solomon</h1>
            <p></p>
            <p></p>
            <p>E-mail:silvermoon3569@gmail.com</p>
        </div>
        <div class="introduction">
            <div class="main_block">
                <h1>Introduce Myself</h1>
                <p>
                    我畢業於國立台北科技大學電機系，迄今已有1年的網站工程師工作經驗，從中我了解積極互助的團隊工作模式與良好的資訊傳承，是一個好的工作性質與環境不可或缺的因素，而我具備上述構成二者主要條件，團隊良好的溝通管道和建立有系統的資訊歸檔。
                </p>
                <p>
                    藉由前工作經驗，奠定網頁工程語法的基礎及應用，並透過企劃的需求，完成網站。
                </p>
                <p>我擅長</p>
                <p>1.後端工程語法: PHP, MySQL</p>
                <p>2.前端工程語法: JS, HTML, Sass.</p>
                <p>3.AJAX 前後端介接</p>
                <p>4.Framework: CodeIgniter, Laravel.</p>
                <p>5.HTTP Server: Apache 使用及設定.</p>
                <p>6.網址域名 Domain Name 的使用及 DNS 基礎</p>
                <p>7.Ubuntu Linux 基礎指令操作（使用本機虛擬機）</p>
                <p>8.Git 版本控制</p>
                <p>9.使用Amazon AWS架設的網站</p>
            </div>

        </div>

        <div class="row_MrMt">
            <a href="/user">
                <div class="main_block-1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>Member Management
                </div>
            </a>
        </div>
        <div class="row_MeBd">
            <a href="/posts">
                <div class="main_block-1">
                    <i class="fa fa-commenting" aria-hidden="true"></i>Message Board
                </div>
            </a>
        </div>
        <div class="row_SpCt">
            <a href="/products">
                <div class="main_block-1">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>Shopping Cart
                </div>
            </a>
        </div>
        <div class="row_CtRm">
            <a href="/chat">
                <div class="main_block-1">
                    <i class="fa fa-comments" aria-hidden="true"></i>Chat Room
                </div>
            </a>
        </div>


    </div>
</body>

@endsection
