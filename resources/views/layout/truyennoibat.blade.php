@extends('layout/master')
@section('truyennoibat')
  <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <link rel="icon" type="image/png" href="https://dtruyen.com/frontend/img-thumb/favicon.ico"> <title>Truyện Ngôn Tình - Truyện tình cảm rất hay và cảm động mới nhất đã full</title> <link href="https://img.dtruyen.com"> <link rel="preconnect" href="https://connect.facebook.net"> <link href="https://www.google-analytics.com"> <link href="https://www.googletagmanager.com"> <link href="https://dtruyen.com/ngon-tinh/"> <link rel="preload" href="https://img.dtruyen.com/desktop/css/main.css?v=0.0.3" as="style"><link rel="preload" href="https://img.dtruyen.com/desktop/js/main_events.js" as="script"> <style>@charset "utf-8";
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
}#breadcrumb{ font-size: 14px; line-height: 18px; padding: 0 5px; overflow: hidden; white-space: nowrap;
}
#breadcrumb span,#breadcrumb h1{display:inline-block;font-weight:400;}
#breadcrumb a{color:#595959;display:inline-block;line-height:40px;}
.fa-home:before { content: '\e806'; }
.fa-user:before { content: '\e800'; }
.tag-description{margin-bottom: 15px;padding: 15px;line-height: 1.3em;border-bottom: 1px solid #ddd;}
.list-stories li{margin:0 10px;padding:15px 0;border-bottom: 1px dashed #e5e6e9;}
.story-list{display:flex;}
.story-list .thumb{display:block;width:35px;margin-right:10px;flex-shrink: 0;}
.story-list .info{flex-grow: 1;}
.story-list .info .title{ font-size: 15px; line-height: 14px; font-weight: 600; letter-spacing: -1px; display: inline;
}
.story-list .info .title a{color: #444;}
.story-list .last-chap{width:150px;font-size: 12px;color: #707070;flex-shrink: 0;}
.story-list p{font-size: 15px;color: #000;margin-top: 4px;}
.pagination-control{margin: 10px 0;text-align:center;}
.pagination-control .pagination li{display:inline-block;}
.pagination-control .pagination li a{padding: 5px 12px;display:inline-block;color:#737373;font-size:18px;font-weight:500;}
.pagination-control .pagination li.active a{background:#2F52B2;color:#fff;}
.categories a{width:50%;float:left;padding: 6px 6px 6px 20px;color:#444;text-transform: capitalize;}
.categories a:nth-of-type(1),.categories a:nth-of-type(2),.categories a:nth-of-type(3),.categories a:nth-of-type(4){ font-weight:600;color:#df1a0c;
}
.categories a:before{font-family: webtruyen_icon;display:inline-block;vertical-align: baseline;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale; content:"\e801";margin-right:5px;}
.categories a:nth-of-type(1):before,.categories a:nth-of-type(2):before,.categories a:nth-of-type(3):before,.categories a:nth-of-type(4):before{ content:"\f219";
}
.list-stories .no-result{text-align:center;padding: 30px;font-style: italic;}
.list-stories .promote-vip{position: relative;overflow: hidden;padding: 20px;color: #fff;z-index:1;text-shadow: 1px 1px 3px #000;}
.promote-vip:before{content:"";position: absolute;top:0;right:0;bottom:0;left:0;background: rgba(0,0,0,0.3);z-index:-1}
.promote-vip:after{content:"";display:table;clear:both;}
.promote-vip .img-blurred{position: absolute;top:0;right:0;bottom:0;left:0;z-index:-2;background-size: cover;background-repeat: no-repeat;background-position: center;filter: blur(8px);-webkit-filter: blur(8px);}
.promote-vip .thumb{width:160px;margin-right:20px;float:left;}
.promote-vip .thumb img{height:auto;}
.promote-vip .title{margin-bottom: 10px;font-weight:700;}
.promote-vip .title a{color:#fff;font-size: 21px;}
.promote-vip p{margin-bottom: 10px;}
.promote-vip .read-now{padding: 8px 16px;background:#e74c3c;color:#fff;font-size: 14px;display:inline-block;}
.story-top{border-bottom: 1px dashed #e5e6e9;}
.story-top:before{width:50px;height:48px;line-height:48px;text-align: center;font-weight:200;font-size:25px;letter-spacing: -.5px;color:#2980b9;float:left;}
.top-stories .story-top:nth-of-type(1):before{content:"01";color:#e74c3c;}
.top-stories .story-top:nth-of-type(2):before{content:"02";color:#3a833c;}
.top-stories .story-top:nth-of-type(3):before{content:"03";color: #8f6b00;}
.top-stories .story-top:nth-of-type(4):before{content:"04";}
.top-stories .story-top:nth-of-type(5):before{content:"05";}
.top-stories .story-top:nth-of-type(6):before{content:"06";}
.top-stories .story-top:nth-of-type(7):before{content:"07";}
.top-stories .story-top:nth-of-type(8):before{content:"08";}
.top-stories .story-top:nth-of-type(9):before{content:"09";}
.top-stories .story-top:nth-of-type(10):before{content:"10";}
.story-top:after{content:"";display:table;clear:both;}
.story-top .title{font-size: 14px; font-weight: 600; letter-spacing: -1px; padding-top:6px;padding-right:6px; overflow: hidden;}
.story-top .title a{color:#333;}
.story-top .viewed{color:#757575;font-size:11px;}
.news-item .thumb{width:70px;padding:10px;float:left;}
.news-item .thumb img{height:auto;}
.news-item .title{padding-top:10px;padding-right:10px;font-weight:normal;margin-left:70px;}
.news-item .title a{color:#444;text-transform: capitalize;}</style> <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MCG6LV5"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-MCG6LV5');</script> </head>
	<div id="main" class="main"> <div class="container"> <div class="main-col"> 
    <div id="breadcrumb"> 
      <span> <a href="{{URL('trangchu')}}" >
        <i class="fa-home"></i> <span>Trang Chủ</span></a> 
        <i class="fa-angle-right"></i> </span> 
        <h1>
          <a href=""> 
            <span>Truyện Nổi Bật</span> 
          </a>
          </h1> 
        </div> 
        <section class="card-box"> 
          <header>
          <h2><a href="">Truyện Nổi Bật</a>
          </h2>
        </header>
        <nav>
          <div>
           <a href="https://dtruyen.com/truyen-ngon-tinh-hay/">Truyện Ngôn Tình hay</a>
         </div>
       </nav>
       
        @php
          $count = count($truyen);
        @endphp

        @if($count == 0)
          <p>Truyện đang cập nhật ...</p>
        @else
           @foreach($truyen as $value)
           <div class="list-stories"> 
            <ul> 
              <li class="story-list" data-id="24301" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> 
                <a href="{{URL('xem-truyen/'.$value->slug_truyen)}}" class="thumb"> 
                  <img src="{{asset('uploads/truyen/'.$value->hinhanh)}}"  class="cover" width="35" height="50">
                  </a> 
                  <div class="info"> 
                    <h3 class="title">
                      <a href="{{URL('xem-truyen/'.$value->slug_truyen)}}">{{$value->tentruyen}}</a></h3> 
                      <span class="vip-2"></span>
                      <span class="hot-0"></span>
                      <span class="full-ongoing"></span> 
                      <label class="label label-type-2"></label>
                       <p itemprop="author">
                        <i class="fa-user"></i> {{$value->tacgia}}</p>
                  </div> 
                        <div class="last-chap"> 
                          <p class="last-chapter">Chương 1503</p> 
                          <i class="last-updated">22 phút trước</i> 
                        </div>
                </li>
                 </ul> 
               </div>
               @endforeach
          @endif
           <footer> 
            <div class="pagination-control">
              <ul class="pagination">
            <li class="active"><a href="#" >1</a>
            </li>
            <li>
              <a href="https://dtruyen.com/ngon-tinh/2/">2</a>
            </li>
            <li class="dot"><span>...</span></li>
            <li>
              <a href="https://dtruyen.com/ngon-tinh/364/">364</a></li>
            <li>
                <a href="https://dtruyen.com/ngon-tinh/2/" title="Trang sau"><i class="fa-angle-right"></i></a>
            </li>
              </ul>
            </div> 
              </footer> 
            </section> 
          </div> 




        </div>
      </div>
@endsection