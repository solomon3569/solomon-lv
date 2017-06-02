@extends('layouts.app')

@section('content')
<!-- <head>   
    <link rel="stylesheet" href="{{ elixir('css/app.css')  }}" >
</head> -->
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
                    我畢業於國立台北科技大學電機系，求學階段結束後，迄今已有5年的工作經驗，從中我了解積極互助的團隊工作模式與良好的資訊傳承，是一個好的工作性質與環境不可或缺的因素，而我具備上述構成二者主要條件，團隊良好的溝通管道和建立有系統的資訊歸檔。
                </p>
                <p>
                    決定選擇成為PHP網站後端工程師，來自於前任工作以及大學時代寫程式的經驗，從C語言至Excel Visual Basic，在工作期間使用程式作為計算的驗證工具，也得到程式的便利之處以及成就感，透過先前的基礎在進入PHP的領域，並選擇Laravel框架作為開發網頁的工具，完成網站功能需求。
                </p>
                <p>我擅長</p>
                <p>1.Laravel 及 PHP 語法</p>
                <p>2.MySQL 資料庫、SQL 指令</p>
                <p>3.常見網頁功能：會員登入、留言板、(購物車)</p>
                <p>4.AJAX 前後端介接</p>
                <p>5.網站 Debug 除錯</p>
                <p>6.Apache 伺服器軟體安裝</p>
                <p>7.網址域名 Domain Name 的使用及 DNS 基礎</p>
                <p>8.Ubuntu Linux 基礎指令操作（使用本機虛擬機）</p>
                <p>9.Git 版本控制及 Code Deployment</p>
                <p>10.使用Amazon AWS架設的網站</p>   
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
