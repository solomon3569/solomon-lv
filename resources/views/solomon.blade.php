@extends('layouts.app')

@section('content')
<!-- <head>   
    <link rel="stylesheet" href="{{ elixir('css/app.css')  }}" >
</head> -->
<body>   
    <div class="container_me container-fluid">
        <div class="introduction">
            <div class="main_block">
                <h1>Inroduce Myself</h1>
                <p>
                    人成驚什開業世不了選間少始了大點們視，上機家難，年我說長官定看出打方評經統著有樣頭務回在聞極銷；例高感。
                </p>
                <p>去住在藝生保個。</p>
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
