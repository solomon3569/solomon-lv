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
                    　　成為PHP網頁工程師，迄今有1年的工作經驗。我使用PHP MySQL和JS完成資料輸出和事件功能，使用HTML CSS 和JS完成頁面展示和頁面效果，有效運用上述語言特性，在MVC架構下，完成交付的任務。從中透過良好的溝通模式與積極互助的團隊工作模式，有效完善團隊任務及企畫需求。
                </p>
                <p>我擅長</p>
                <p>1.後端工程語法: PHP, MySQL.</p>
                <p>2.前端工程語法: JS, HTML, Sass.</p>
                <p>3.Jquery AJAX 前後端介接。</p>
                <p>4.Framework: CodeIgniter, Laravel.</p>
                <p>5.HTTP Server: Apache和Nginx使用及設定。</p>
                <p>6.Ubuntu Linux 基礎指令操作。</p>
                <p>7.Git 版本控制。</p>
                <p>8.使用Amazon AWS EC2架設網站。</p>
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
