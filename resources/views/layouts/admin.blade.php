<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   
        
        <header>
        <p>
        <img class="logo" src="https://www.bairdtv.com/images/logos/nba.jpg" alt="logo" width="80" height="60">
        </p>
          <nav>
            <ul class="center">
              <li><a href="#">Ranking</a></li>
              <li><a href="#">Wiki</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Tickets</a></li>
            </ul>
            <ul class="right">
              <li><a href="#">使い方</a></li>
              <li><a href="#">無料会員登録</a></li>
              <li><a href="#">ログイン</a></li>
            </ul>
          </nav>

<div style="display:inline-flex" class="search"> 
        <form id="form1" action="https://3adfec7849014819817aa2d931046d1a.vfs.cloud9.us-east-2.amazonaws.com/?_c9_id=livepreview0&_c9_host=https://us-east-2.console.aws.amazon.com" method="get">
        <input id="sbox1" id="s" name="s" type="text" placeholder="作品名で検索" />
        <input id="sbtn1" type="submit" value="検索" /></form>
        
        <form id="form2" action="https://3adfec7849014819817aa2d931046d1a.vfs.cloud9.us-east-2.amazonaws.com/?_c9_id=livepreview0&_c9_host=https://us-east-2.console.aws.amazon.com" method="get">
        <input id="sbox2" id="s" name="s" type="text" placeholder="俳優名で検索" />
        <input id="sbtn2" type="submit" value="検索" /></form>        
        
        <form id="form3" action="https://3adfec7849014819817aa2d931046d1a.vfs.cloud9.us-east-2.amazonaws.com/?_c9_id=livepreview0&_c9_host=https://us-east-2.console.aws.amazon.com" method="get">
        <input id="sbox3" id="s" name="s" type="text" placeholder="曲名で検索" />
        <input id="sbtn3" type="submit" value="検索" /></form>        

        <form id="form4" action="https://3adfec7849014819817aa2d931046d1a.vfs.cloud9.us-east-2.amazonaws.com/?_c9_id=livepreview0&_c9_host=https://us-east-2.console.aws.amazon.com" method="get">
        <input id="sbox4" id="s" name="s" type="text" placeholder="曲名で検索" />
        <input id="sbtn4" type="submit" value="検索" /></form>        
        </div> 

        </header>
        
        
        <div class="side_container">
          <div class="item">会員登録すると＊＊できます。</div>
          <div class="item">ログイン</div>
          <div class="item">無料会員登録</div>
        </div>
        
        
        
        
        
        
        
        {{-- <div id="app">
            <img class="logo" src="https://www.bairdtv.com/images/logos/nba.jpg" alt="logo" width="80" height="60">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav> 
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div> --}}
    </body>
</html>