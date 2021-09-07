<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="ホームページサンプル株式会社 | ホームページサンプル株式会社では最新技術と自然との調和を目指します。">
<meta name="keywords" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>アプリ名</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="{{ asset('css/home_style.css').'?'.time() }}">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>
<!-- ヘッダー -->
	<header>
		<!-- ロゴ -->
		<div class="logo">
			<p>アプリ名</p>
		</div>
		<!-- / ロゴ -->

		{{-- ハンバーガメニュー --}}
		<div class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		
		<nav class="globalMenuSp">
			<ul>
				<li><a href="#">Menu1</a></li>
				<li><a href="#">Menu2</a></li>
				<li><a href="#">Menu3</a></li>
				<li><a href="#">Menu4</a></li>
				<li><a href="#">Menu5</a></li>
			</ul>
		</nav>
		{{-- /ハンバーガーメニュー --}}

		

	{{-- ---------- ナビゲーション ---------- --}}

		{{-- ---------- アカウント ---------- --}}
		<a href="" class="account">アカウント名</a>
		{{-- ---------- /アカウント ---------- --}}
		
		<ul class="gnavi">
			<li class="current"><a href="#">参加</a></li>
			<li><a href="#">募集</a></li>
			<li><a href="#">チーム</a></li>
			</ul>
	{{-- ---------- /ナビゲーション ---------- --}}

		{{------------ 検索マーク ------------}}
		<div id="search-wrap">
			<form role="search" method="get" action="">
			<input type="text" value="" name="" id="search-text">
			</form>
		</div>
		{{------------ /検索マーク ------------}}
	
	</header>
<!-- / ヘッダー -->

<div id="wrapper">
    
<!-- コンテンツ -->

	<ul class="tab">
		<li><a href="#lunch">ランチ</a></li>
		<li><a href="#drink">ドリンク</a></li>
		<li><a href="#dinner">ディナー</a></li>
	</ul>
	

	<!--slider-->

	<div id="lunch" class="area">
		<ul class="slider">
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
		</ul>
	</div>

	<div id="drink" class="area">
		<ul class="slider">
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
		</ul>
	</div>

	<div id="dinner" class="area">
		<ul class="slider">
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_1.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('img/image_3.jpeg')}}">
				<div class="details">
					<h2>---------- タイトル ----------</h2>
					<p>現在の人数：  人 / 募集人数：  人</p>
					<p>---------- 場所 ----------</p>
					<p>---------- 時間 ----------</p>
				</div>
			</li>
		</ul>
	</div>
	<!--/slider-->

<!-- / コンテンツ -->


<!-- / WRAPPER -->

<!-- フッター -->
<footer>
	<div class="copyright">
		<p>© 2018 - Organisation</p>
	</div>
	<div class="sns">
		<a href="#" class="contact">Contact</a>
		<a href="#" class="fb"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i>fb</a>
		<a href="#" class="tw"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i>tw</a>
		<a href="#" class="insta"><i class="fa fa-instagram fa-fw" aria-hidden="true">in</i></a>
	</div>
</footer>
<!-- / フッター -->

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="/js/home_script.js"></script>
	<link rel="javascript" href="{{ asset('js/home_script.js').'?'.time() }}">
</body>
</html>