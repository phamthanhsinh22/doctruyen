@extends('layout/master')
@section('dangki')
<!DOCTYPE html>

	
<!DOCTYPE html><html lang="vi" xml:lang="vi"><head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <link rel="icon" type="image/png" href="https://dtruyen.com/frontend/img-thumb/favicon.ico"/> <title>Đăng ký - Trang đọc truyện online</title> <meta name="description" content="Trang đăng ký thành viên dtruyen.com"/> <meta name="google-site-verification" content="pmml8b8290DK-Iujrgoals2fiWdh6mCb79VoX6P8yfA"/> <meta name='dailymotion-domain-verification' content='dm3wjyqzzo32nr7oh'/> <link rel="preconnect" href="https://img.dtruyen.com"> <link rel="preconnect" href="https://connect.facebook.net"> <link rel="preconnect" href="https://www.google-analytics.com"> <link rel="preconnect" href="https://www.googletagmanager.com"> <link rel="canonical" href="https://dtruyen.com/dang-ky/"/> <meta name='ROBOTS' content="NOINDEX,NOFOLLOW"/> <meta property="og:locale" content="vi_VN"/> <meta property='og:title' content='Đăng ký - Trang đọc truyện online'/> <meta property='og:description' content='Trang đăng ký thành viên dtruyen.com'/> <meta property='og:url' content='https://dtruyen.com/dang-ky/'/> <meta property='og:site_name' content='main'/> <meta property='og:type' content='website'/> <meta property="og:image" content="https://dtruyen.com/public/frontend/desk/img/logo_b.png"/> <meta name="viewport" content="width=device-width, initial-scale=1"/> <meta name="google-signin-client_id" content="840898549498-aespl6b0dktpdrgssq2qbhv5st1bna7s.apps.googleusercontent.com"> <meta property="fb:app_id" content="212174092286047"/> <meta name="apple-itunes-app" content="app-id=1474444373, affiliate-data=webtruyen, app-argument=https://apps.apple.com/us/app/id1474444373"> <link rel="preload" href="https://img.dtruyen.com/desktop/css/main.css?v=0.0.3" as="style"><link rel="preload" href="https://img.dtruyen.com/desktop/js/main_events.js" as="script"> <style>@charset "utf-8";
@font-face { font-family: 'webtruyen_icon'; src: url('https://img.dtruyen.com/webtruyen_icon.eot'); src: url('https://img.dtruyen.com/webtruyen_icon.eot#iefix') format('embedded-opentype'), url('https://img.dtruyen.com/webtruyen_icon.woff2') format('woff2'), url('https://img.dtruyen.com/webtruyen_icon.woff') format('woff'), url('https://img.dtruyen.com/webtruyen_icon.ttf') format('truetype'), url('https://img.dtruyen.com/webtruyen_icon.svg?#webtruyen_icon') format('svg'); font-weight: normal; font-style: normal; font-display: swap;
}
html { color: #000; background: #eee; overflow-y: scroll; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; scroll-behavior: smooth;
}
html * { outline: 0; -webkit-text-size-adjust: none; -webkit-tap-highlight-color: transparent
}
body, html { font-family: "Segoe UI", Arial, sans-serif; font-size: 14px; background: #eee;
}
article, aside, blockquote, body, button, code, dd, details, div, dl, dt, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, hr, input, legend, li, menu, nav, ol, p, pre, section, td, textarea, th, ul { margin: 0; padding: 0
}
input, select, textarea { font-size: 100%; font-family: inherit;
}
table { border-collapse: collapse; border-spacing: 0
}
fieldset, img { border: 0
}
abbr, acronym { border: 0; font-variant: normal
}
del { text-decoration: line-through
}
address, caption, cite, code, dfn, th, var { font-style: normal; font-weight: 400
}
ol, ul { list-style: none
}
caption, th { text-align: left
}
h1, h2, h3, h4, h5, h6 { font-size: 100%; font-weight: 600
}
q:after, q:before { content: ''
}
sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline
}
sup { top: -.5em
}
sub { bottom: -.25em
}
a:hover { text-decoration: underline
}
a, ins { text-decoration: none
}
* { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;
}
a { color: #016eb2; text-decoration: none;
}
small { font-size: 0.8em;
}
img { max-width: 100%;vertical-align: middle;
}
.clearfix:after { content: ""; display: table; clear: both;
}
[class^="fa-"]:before, [class*=" fa-"]:before { font-family: "webtruyen_icon"; font-style: normal; font-weight: normal; display: inline-block; text-decoration: inherit; text-align: center; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;
}
.fa-user:before { content: '\e800'; }
.fa-tags:before { content: '\e801'; }
.fa-refresh:before { content: '\e802'; }
.fa-eye:before { content: '\e803'; }
.fa-thumbs-o-up:before { content: '\e804'; }
.fa-signal:before { content: '\e805'; }
.fa-cloud-upload:before { content: '\f0ee'; }
.fa-angle-left:before { content: '\f104'; }
.fa-angle-right:before { content: '\f105'; }
.fa-angle-down:before { content: '\f107'; }
.fa-diamond:before { content: '\f219'; }
.fa-search:before { content: '\e80a'; }
.fa-cog:before { content: '\e80b'; }
.fa-off:before { content: '\e80e'; }
.fa-facebook:before { content: '\f09a'; }
.fa-money:before { content: '\f0d6'; }
.fa-history:before { content: '\f1da'; }
.fa-paypal:before { content: '\f1ed'; }
.fa-off:before{content:'\e80e';}
.fa-heart-empty:before { content: '\e808'; }
.fa-list-bullet:before { content: '\f0ca'; }
.fa-star::before{content:'\e807'}
.container{width:100%;max-width:1000px;margin:auto;display: flex;}
#main{margin-top:20px;}
#main-header{height:50px;background:#2C7ABE;color:#fff;}
#main-header .logo{float:left;margin-right:10px;}
#main-header .logo a{ margin: 5px 0; display:block;color:#fff; height:40px; line-height:40px;text-align:center;font-size:17px;text-transform: capitalize;font-weight:600;}
#main-header .logo a:before{ width:40px;height:40px;display:inline-block;margin-right: 10px; background: url(https://img.dtruyen.com/logo-dtruyen.png) no-repeat; background-size: 40px 40px; content:"";vertical-align: middle;}
#main-header ul.main-nav{float:left;}
#main-header ul.main-nav>li{float:left;positioN: relative;}
#main-header ul.main-nav>li>a{padding:0 15px;height:50px;line-height:50px;color: #fff;}
#main-header ul.main-nav>li ul{position: absolute;left:0;top:50px;background: #fff;width:300px;box-shadow:2px 2px 3px rgba(0,0,0,0.2);display:none;flex-wrap: wrap;z-index:9;}
#main-header ul.main-nav>li:hover ul{display:flex;}
#main-header ul.main-nav>li ul li{width:50%;flex-shrink: 0;border-right:1px solid #ddd;border-top:1px solid #ddd;}
#main-header ul.main-nav>li ul li:nth-of-type(2n){border-right:none;}
#main-header ul.main-nav>li ul li:nth-of-type(1),#main-header ul.main-nav>li ul li:nth-of-type(2){border-top:none;}
#main-header ul.main-nav>li ul li a{padding: 8px 16px;display:block;color:#333;text-decoration:none;}
#main-header ul.main-nav>li ul li a.vip-link{color:#e74c3c;}
#main-header ul.main-nav>li ul li.compose-link{width:100%;text-align:center;}
#main-header ul.main-nav>li ul li.compose-link a{color:#e74c3c;}
#main-header ul.main-nav>li ul li a:hover{background: #eee;}
#search_form{float:left;padding:8px 10px;position: relative;}
#search_form input{width:300px;height:34px;line-height:34px;padding: 0 15px;border-radius: 1px;border:none;background:#fff;float:left;}
#search_form button{background:#e5e6e9;border:none;padding:0 15px; line-height:34px;margin-left:3px;border-radius: 1px;}
#userPanel{margin-left:auto;height:50px;position: relative;}
#userPanel .login-btn{line-height: 50px;color:#fff;}
.main-col{flex-grow: 1;}
.right-sidebar{flex-shrink: 0;width:300px;margin-left:20px;}
.card-box{ background: #fff; margin-bottom: 12px; border-top: 1px solid #e5e6e9; border-bottom: 1px solid #e5e6e9;
}
.card-box header{ padding: 8px 10px; border-bottom: 1px solid #e5e6e9; color: #2F52B2; font-size: 18px; line-height: 18px; font-weight: 600; letter-spacing: -2px; text-transform: uppercase;
}
.card-box header i{margin: 0 10px;}
.card-box footer{text-align:center;padding:8px 10px;}
.card-box footer .show-more-btn{padding: 5px 20px; font-size: 14px; border-radius: 15px; background: #737373;color:#fff;text-align: center; cursor: pointer; white-space: nowrap;display:inline-block;}
.card-box>nav{padding: 5px;border-bottom:1px dashed #e5e6e9;text-align:center;display:flex;width:100%;overflow: hidden;}
.card-box>nav a{ font-size: 13px; letter-spacing: -.5px; display:inline-block; padding: 5px;background: #555;color:#fff; margin-bottom: 5px; border-radius: 2px; flex-shrink: 0;margin-right: 10px;
}
.vip-1:before { display:none; content: "VIP"; color: #e74c3c; border: 1px solid #e74c3c; width: 27px; font-size: 13px; font-weight: 500; padding: 0 3px; letter-spacing: -1px; margin-left: 5px;
}
.hot-1:before { content: "HOT"; color: #2c7abe; border: 1px solid #2c7abe; width: 27px; font-size: 13px; font-weight: 500; padding: 0 3px; letter-spacing: -1px; margin-left: 5px;
}
.story-list .info .label-type-1::before,.story-list .info .label-type-2::before,.story-list .info .label-type-3::before{ color: #e74c3c; border: 1px solid #e74c3c; width: 27px; font-size: 13px; font-weight: 500; padding: 0 3px; letter-spacing: -1px; margin-left: 5px;
}
.story-list .info .label-type-1::before{content:"SÁNG TÁC";}
.story-list .info .label-type-2::before{content:"DỊCH";}
.story-list .info .label-type-3::before{content:"CONVERT";}
.full-end:before { content: "FULL"; color: #090; border: 1px solid #090; width: 27px; font-size: 13px; font-weight: 500; padding: 0 3px; letter-spacing: -1px; margin-left: 5px;
}
.side-description{ line-height: 1.3em;margin-bottom: 15px;padding:10px;background: #fff;border: 1px solid #ddd;
}
.side-description ul{margin-left: 10px;list-style: disc;}
#reading-stories{margin:10px;}
#reading-stories>div{margin-bottom:10px;display:flex;background:#ffeecc;border:1px solid #ffcc66;border-radius:40px;height:40px;}
#reading-stories>div:last-child{margin-bottom:0;}
#reading-stories>div>a{flex-grow: 1;overflow: hidden;color:#000;}
#reading-stories>div>a h5{display:block;white-space: nowrap;font-weight:600;font-size:13px;}
#reading-stories>div>a em{margin-right:20px;}
#reading-stories>div>a em,#reading-stories>div>a span{font-size: 12px;}
#reading-stories>div>i{float:left;width:40px;line-height:40px;text-align:center;flex-shrink: 0;}
#reading-stories>div>button{flex-shrink: 0;width:44px;border:none;background:none;font-size: 21px;text-align:center;line-height:36px;margin:2px 0;border-left: 1px solid #ffcc66;}
#reading-stories>div>span{line-height:40px;flex-shrink: 0;font-size: 13px;text-align: right;margin: 0 5px 0 10px;}
.promo-author{background: #fff; margin-bottom: 12px; border-top: 1px solid #e5e6e9; border-bottom: 1px solid #e5e6e9; text-align:center; padding: 10px; font-size: 16px;
}
.promo-author p{ margin-bottom: 10px;
}
.promo-author .gogo{ display: inline-block; padding: 6px 16px; white-space: nowrap; border-radius: 2px; color: #fff;background: #e91b0c; margin-top: 10px;text-decoration: none;
}
@media print { html, body { display: none; }
}
@media only screen and (max-width: 860px){ #main-header:after{content:"";display:table;clear:both;} #main-header ul.main-nav>li>a{padding:0 5px;} #search_form input{width:170px;} .container{display:block;} .card-box>nav{overflow: scroll;} .right-sidebar{width:auto;margin-right:20px;} #userPanel{float:right;}
}
@media only screen and (max-width: 600px){ #header{height:100px;}
}.box-container{width:700px;margin:auto;}
.card-box{width:100%;padding: 0 20px;background: #fff;}
.card-box header{font-size: 21px;text-align: center;}
.alert { position: relative; padding: .9375rem 1.25rem; margin-bottom: 1.25rem; border: 1px solid transparent; border-radius: .1875rem;
}
.alert-success{ color: #285b2a; background-color: #e2f2e3; border-color: #5ab55e;
}
.alert-danger{ color: #7f231c; background-color: #fde1df; border-color: #f55246;
}
.text-center{text-align:center;}
.text-danger{color:#df1a0c;}
.text-success{color:#4caf50;}
.text-info{color:#00bcd4;}
.form-group{ margin-bottom: 15px;
}
.form-group label{display:block;font-weight: bold;margin-bottom: 5px;}
.form-control{display: block; width: 100%; padding: .5rem 0; line-height: 1.5385; color: #333; background-color: transparent; background-clip: padding-box; border: 1px solid #ddd; border-radius: 0; box-shadow: 0 0 0 0 transparent; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.submit-btn{display: inline-block; white-space: nowrap; border-radius: 2px; color: #fff;background: #2c7abe; font-size: 1.2em;padding: 12px 16px; font-weight: bold;border:none;text-transform: uppercase;cursor: pointer;}
.register-main{display: flex;}
.register-main .loginForm{flex-grow: 1;}
.register-main>p { width: 100px; text-align: center; position: relative; padding-top: 120px; flex-shrink: 0;
}
.register-main>p span { background: #fff; padding: 8px 0; position: relative; z-index: 1; color: #888;
}
.register-main>p::after { content: ""; border-right: 1px solid #ddd; top: 0; bottom: 0; left: 50%; position: absolute;
}
.register-main .socials { width: 200px; flex-shrink: 0;
}
.register-main h3 { margin-bottom: 15px;
}
#login-with-facebook2, #login-with-google2 { display: block; border-radius: 4px; margin-bottom: 0.75em; position: relative; line-height: 40px; color: #fff; padding: 4px 10px;
}
#login-with-facebook2 { background: #304B84;
}
#login-with-google2 { background: #de5246;
}
#login-with-facebook2 i, #login-with-google2 i { width: 40px; height: 40px; float: left; line-height: 40px; background: #fff; margin-right: 10px; text-align: center; font-size: 21px;
}
#login-with-facebook2 i { color: #304B84;
}
#login-with-google2 i { color: #de5246;
}
@media only screen and (max-width: 500px){ .box-container{width:100%} .register-main{display:block;} .register-main>p { padding: 30px 0; text-align: center; width: 100%; } .register-main>p span { padding: 0 8px; } .register-main>p::after { left: 0; bottom: 50%; border-right: none; border-bottom: 1px solid #ddd; width: 100%; } .register-main .socials { width: 100%; text-align: center; }
}</style> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-MCG6LV5');</script> </head><body itemscope itemtype="http://schema.org/WebPage">
</head>
<body>
	

<div class="box-container"> <div class="card-box"> 
	<header>Đăng Ký</header>
	<div class="register-main"> 
		<form method="post" class="loginForm">
		{{csrf_field()}}
		@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
			<input type="hidden" name="direct" value="1"/> 
			<div class="form-group"> 
				<label>Email</label> 
				<input type="email" class="form-control" autocomplete="off" name="email" id="email" placeholder="Email"> 
			</div> 
				<div class="form-group"> 
					<label>Mật Khẩu</label> 
					<input type="password" class="form-control" autocomplete="off" name="password" id="password" placeholder="Mật khẩu"> 
				</div> 
				<div class="form-group"> <label>Nhập lại Mật Khẩu</label> 
					<input type="password" class="form-control" autocomplete="off" name="repassword" id="repassword" placeholder="Nhập lại Mật khẩu"> 
				</div> 
				<div class="form-group">
					<input type="hidden" class="form-control" autocomplete="off" name="quyen" value="0"> 
				</div> 
				<div style="margin-top: 15px;">
					<button type="submit" class="submit-btn" name="register">Đăng Ký</button>
				</div> 
			</form> <p><span>Hoặc</span></p> <div class="socials"> <h3>Đăng ký bằng</h3> <a id="login-with-facebook2" href="https://www.facebook.com/dialog/oauth?client_id=212174092286047&scope=public_profile,email&redirect_uri=https://dtruyen.com/user/fblogin" rel="nofollow" class="login-btn"><i class="fa fa-facebook"></i> Facebook</a> <a href="#login-with-google2" rel="nofollow" id="login-with-google2" data-onsuccess="onSignIn" class="login-btn g-signin2"><i class="fa fa-google"></i> Google</a> </div> </div> </div></div>
</body>
</html>
@endsection
