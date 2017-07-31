@extends('layouts.app')

@section('script')
<script>
        $('.carousel').on('slid.bs.carousel', function () {

            var anchor_current = $('.item.active').html();
            var pos = anchor_current.indexOf("pic_");
            if(pos!=-1){
                var anchor_new_id = anchor_current.substring(pos).slice(4,5);
                // anchor_new_id++;
            }
            console.log(anchor_new_id);
            $('.cont .active').removeClass("active");
            $('.img_'+anchor_new_id).addClass('active');
        })
</script>
@endsection

@section('content')
<!-- <head>
    <link rel="stylesheet" href="{{ elixir('css/app.css')  }}" >
</head> -->
<body>
    <div id="carousel-example-generic myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="main_carl active" id="main_carl"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class="main_carl" id="main_carl"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class="main_carl" id="main_carl"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/pic/member.jpg" alt="..." id="pic_1">
          <div class="carousel-caption">
            ...1
          </div>
        </div>
        <div class="item">
          <img src="/pic/message.jpg" alt="..." id="pic_2">
          <div class="carousel-caption">
            ...2
          </div>
        </div>
        <div class="item">
          <img src="/pic/shoppingcart.jpg" alt="..." id="pic_3">
          <div class="carousel-caption">
            ...3
          </div>
        </div>
        ...
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="vc_nb_bar">
        <div class="con_bg">
          <div class="cont" id="img_number">
            <div class="img_1 active" style="background-image: url('imgs/bg/Assassins-Creed-Origins-Xbox-One-X-version-15.jpg');">
            </div>
            <div class="img_2" style="background-image: url('imgs/bg/Assassins-Creed-Origins-Xbox-One-X-version-15.jpg');"></div>
            <div class="img_3" style="background-image: url('imgs/bg/Assassins-Creed-Origins-Xbox-One-X-version-15.jpg');"></div>
            <div class="img_4" style="background-image: url('imgs/bg/Assassins-Creed-Origins-Xbox-One-X-version-15.jpg');"></div>
            <div class="img_5" style="background-image: url('imgs/bg/Assassins-Creed-Origins-Xbox-One-X-version-15.jpg');"></div>
          </div>
        </div>
    </div>


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
