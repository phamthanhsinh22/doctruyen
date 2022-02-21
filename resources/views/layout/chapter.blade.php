@extends('layout/master')
@section('Title','chapter')
@section('chapter')
<head><link rel="icon" type="image/png" href="https://dtruyen.com/frontend/img-thumb/favicon.ico"> <title>Thiên Tài Triệu Hồi Sư - Quyển 1 - Chương 1: Số 17</title> <link href="https://img.dtruyen.com"> <link rel="preconnect" href="https://connect.facebook.net"> <link href="https://www.google-analytics.com"> <link rel="preconnect" href="https://www.googletagmanager.com"> <link href="https://dtruyen.com/thien-tai-trieu-hoi-su/so-17_430212.html">
	<link href="https://img.dtruyen.com/desktop/css/main.css?v=0.0.3" as="style"><link href="https://img.dtruyen.com/desktop/js/main_events.js" as="script"> <style>@charset "utf-8";
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
}#chapter-page{width: 100%; max-width: 1000px; margin: auto;}
#breadcrumb{ font-size: 14px; line-height: 18px; padding: 0 5px; overflow: hidden; white-space: nowrap;
}
#breadcrumb span,#breadcrumb h1{display:inline-block;font-weight:400;}
#breadcrumb a{color:#595959;display:inline-block;line-height:40px;}
#chapter{ background: #fff; border: 1px solid #e5e6e9;
}
#chapter header{margin:15px;padding: 10px;border:2px dotted #757575;border-radius: 10px;text-align:center;}
#chapter header .story-title{font-weight: 700;font-size: 20px;color:#df1a0c;text-transform: uppercase;}
#chapter header .story-title a{color:#df1a0c;}
#chapter header .chapter-title{font-weight:500;font-size:16px;color:#555;text-transform: capitalize;margin: 7px 0;}
#chapter header p{margin: 10px 0;}
.fa-home:before { content: '\e806'; }
.fa-list-bullet:before { content: '\f0ca'; }
.fa-cog:before { content: '\e80b'; }
.fa-paper-plane:before { content: '\f1d8'; }
.fa-zoom-in:before { content: '\e80c'; }
.fa-zoom-out:before { content: '\e80d'; }
.chapter-button{margin: 15px 0;text-align:center;}
.chapter-button a{ color:#fff; display: inline-block; outline: 0; padding: 10px 16px; cursor: pointer; background:#2980b9; font-size: 18px;
}
.chapter-button a.all-chapters,.chapter-button a.config{background:#888;}
.chapter-button a.disabled{opacity:0.1;}
.chapter-button select{height:32px;line-height:32px;border:1px solid #ddd;}
#configReader{display:none;width:500px;padding:15px;border:1px dashed #ddd;}
#configReader p{ border-bottom: 1px dotted #757575; padding: 5px; line-height:34px; display:flex; width:100%;
}
#configReader p label{float:left;width:150px;flex-shrink: 0;}
#configReader select{padding:5px 10px;line-height:34px;height:34px;border:1px solid #ddd;flex-grow: 1;}
#configReader span{flex-grow: 1;text-align: center;}
#configReader button{background: none;border:none;height:34px;line-height:34px;width:40px;text-align:center;margin: 0 5px;font-size:2em;}
#chapter-content{ -webkit-touch-callout: none; /* iOS Safari */ -webkit-user-select: none; /* Safari */ -khtml-user-select: none; /* Konqueror HTML */ -moz-user-select: none; /* Old versions of Firefox */ -ms-user-select: none; /* Internet Explorer/Edge */ user-select: none; font-family: "Palatino Linotype", "Noticia Text", "Times New Roman", serif; font-size: 22px; text-align: justify; padding: 12px; line-height:1.5em; overflow-wrap: break-word; word-wrap: break-word; hyphens: auto;
}
#chapter-content p{margin-bottom: 20px;}
#pre-vip{ background-color: #f1f1f1;text-align:center;border-radius: 2px;padding-left: 8px; padding-right: 8px;margin: 24px 0;
}
#pre-vip span{color:#df1a0c;}
#pre-vip ol{list-style: decimal;text-align: left;margin-left: 40px;}
#pre-vip ol li{margin: 8px 0;}
#click-to-show{color:#fff; display: block; outline: 0; padding: 6px 16px; margin: 0 10px;text-align:center; cursor: pointer; background:#616161;}
.card-box{ background: #fff; margin-bottom: 12px; border-top: 1px solid #e5e6e9; border-bottom: 1px solid #e5e6e9;
}
.card-box header{ padding: 6px 10px; border-bottom: 1px solid #e5e6e9; color: #016eb2; font-size: 16px; line-height: 1.3em; font-weight: 600;
}
.text-webtruyen{display: flex; flex-direction: row; font-size: 16px; color: slategray; margin-top: 0px; margin-bottom: 0px;}
.text-webtruyen:before, .text-webtruyen:after { content: ""; flex: 1 1; border-bottom: 1px solid #cfcbcb; margin: auto;
}
.comment-form{padding: 20px;}
.comment-form textarea{width:100%;height:70px;padding:10px;background:#f2f2f2;}
.comment-form [type="submit"]{border:none;background:#2980b9;color:#fff;display:inline-block;padding: 6px 16px;white-space: nowrap;border-radius: 2px;}
#comment-char-count{font-style: italic;font-weight:600;font-size:13px;}
#comment-char-count span{color:#e74c3c;}
.comment-form .text-right{text-align:right;}
.comment-list { margin: 10px 0; background:#fff; color: #333;
}
.comment { padding: 3px 10px; transition: all 1s; -webkit-transition: all 1s; -o-transition: all 1s; background:#fff; position: relative;
}
.comment.hash{background:#ddd;}
.comment.replyComment { padding-left: 30px; border-bottom: 1px dotted #ddd !important; clear: both;
}
.replyComment button{border:none;background:#2980b9;}
.comment .avatar-letter,.comment img.avatar { float: left; margin-right: 15px; width:40px;height:40px;border-radius: 20px; line-height:34px;background: #ddd; text-align: center; border: 3px solid #777;
}
.comment.vip .avatar-letter,.comment.vip img.avatar{ border-color: #ffd600;
}
.comment.admin .avatar-letter,.comment.admin img.avatar{ border-color: #df1a0c;
}
.comment .comment-content { border: 0; margin-left: 55px;
}
.comment.replyComment .comment-content{margin-left:25px;display:flex;}
.comment .comment-content .userinfo { margin-bottom: 5px; font-size: 13px;
}
.comment .comment-content .userinfo a { font-weight: 700; float: left; text-decoration: none;
}
.comment .comment-content .userinfo .labels{float:left;margin-left: 10px;}
.comment .comment-content .userinfo .labels span{padding: 0 4px;line-height:16px;font-size: 11px;color:#fff;background:#777;display:inline-block;}
.comment .comment-content .userinfo .labels .label-vip{background: #d5b300;}
.comment .comment-content .userinfo .labels .label-admin{background: #df1a0c;}
.comment .comment-content .userinfo .labels .label-author{background: #2196f3;}
.comment .comment-content .userinfo .labels .label-trans{background: #4caf50;}
.comment .comment-content .userinfo .labels .label-converter{background: #ff7043;}
.comment .comment-content .userinfo i { color: #aaa; font-size: 4px; margin: 0 8px; float: left; height: 13px; line-height: 14px;
}
.comment .comment-content .message { line-height: 21px; overflow-x: hidden;
}
.comment .comment-content .comment-text, .comment-textarea { width: 100%; border: 1px solid #eee; resize: none; font-size: 13px; height: 50px;
}
.comment .acts { float: right; text-align: right; font-size: 12px; line-height: 20px;
}
.comment .acts .action-reply-comment { font-weight: bold;
}
.comment .acts .action-love-comment { color: #ec5b24; padding-left: 10px; margin-left: 10px; border-left: 1px solid #ddd;
}
.comment .acts .action-love-comment.liked { color: #aaa; cursor: default;
}
.comment .acts .action-love-comment span { color: #aaa;
}
.comment .acts .action-remove-comment{ color: #aaa; padding-left: 10px; margin-left: 10px; border-left: 1px solid #ddd;
}
.comment.subComment { margin-left: 50px; border-left: 3px solid #eee;
}
#comment-more{text-align: center;margin-bottom: 10px;}
#comment-more a{display: inline-block;outline: 0;padding: 6px 16px;cursor: pointer; white-space: nowrap;background-color: #757575;color:#fff;border-radius:30px;}
.switcher { width: 100%; position: relative; margin: 16px 0; background: #fff; padding: 5px 10px; border: 1px solid #ddd;
}
.switcher input { position: absolute; opacity: 0;
}
.switcher label { line-height: 24px; display: block; position: relative; font-size: 17px;
}
.switcher label:before { content: ""; display: inline-block; position: absolute; width: 40px; height: 14px; top: 5px; right: 0; border-radius: 8px; background-color: #b2b2b2;
}
.switcher label:after { content: ""; position: absolute; width: 24px; height: 24px; box-shadow: 1px 1px 2px rgba(0,0,0,0.1); background-color: #ececec; right: 22px; border-radius: 50%; -webkit-transition: all 0.5s; -moz-transition: all 0.5s; -ms-transition: all 0.5s; -o-transition: all 0.5s; transition: all 0.5s;
}
.switcher input[type="checkbox"]:checked + label::before { background-color: rgba(66,103,178,0.4);
}
.switcher input[type="checkbox"]:checked + label::after { right: -6px; background-color: #4267b2;
}
.wt-ads2 { text-align: center; padding: 5px 0; background: #f5f5f5; margin: 20px auto;
}
.wt-ads2:before,.wt-ads:before { display: block; text-align: center; content: "Advertisements"; font-size: 14px; color: #888; margin-bottom: 5px; font-weight: bold;
}
.wt-ads{display:flex;margin: 30px auto;width:620px;justify-content: space-between;position: relative;padding-top:30px;}
.wt-ads:before{position:absolute;top:0;left:0;right:0;height:30px;margin-bottom:0;line-height:30px;background:#f5f5f5;}
.donateBox{ color: #285b2a; background-color: #e2f2e3; position: relative; padding: .9375rem 1.25rem; margin-bottom: 1.25rem; border: 1px solid #5ab55e; text-align: center; font-size: 1.3em; line-height: 1.3em; font-weight: 500;
}
.donateBox p{margin-bottom: 7px;}
#show-donate-box{display: inline-block; padding: 6px 16px; white-space: nowrap; border-radius: 2px; color: #fff;background: #2c7abe; font-size: 1em;text-transform: capitalize;}
@media print { body { display:none } }</style> <script src="https://connect.facebook.net/vi_VN/sdk.js?hash=85a3dcce4be07058bb73960b2bf17a0f" async="" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MCG6LV5"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-MCG6LV5');</script> <script async="" src="https://jsc.adskeeper.co.uk/a/d/adh.webtruyen.com.1134825.es6.js"></script><link rel="preconnect" href="https://servicer.adskeeper.co.uk"><script async="" src="https://jsc.adskeeper.co.uk/a/d/adh.webtruyen.com.1118577.es6.js"></script><link rel="preconnect" href="https://servicer.adskeeper.co.uk"><script type="text/javascript" charset="utf-8" referrerpolicy="strict-origin-when-cross-origin" src="https://c.adskeeper.co.uk/pv/?pv=5&amp;cbuster=1627904530798166414170&amp;uniqId=146ba&amp;childs=1134827,1134828,1134829,1134830,1134831,1134832,1134833,1134834,1134835,1134836,1134837,1134838,1134840,1134839,1134841,1134842,1134843,1134844,1134845,1134846,1134847,1134848,1134849,1134850,1134851,1134852,1134853,1134854&amp;niet=4g&amp;nisd=false&amp;jsv=es6&amp;ref=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2F&amp;cxurl=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2Fso-17_430212.html&amp;pr=dtruyen.com&amp;lu=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2Fso-17_430212.html&amp;sessionId=6107da13-0279b&amp;pageView=1&amp;pvid=17b06abd970b9b95025&amp;site=663485&amp;implVersion=11&amp;dpr=1"></script><script type="text/javascript" charset="utf-8" referrerpolicy="strict-origin-when-cross-origin" src="https://servicer.adskeeper.co.uk/1134825/1?pv=5&amp;cbuster=1627904531091328710323&amp;uniqId=146ba&amp;childs=1134827,1134828,1134829,1134830,1134831,1134832,1134833,1134834,1134835,1134836,1134837,1134838,1134840,1134839,1134841,1134842,1134843,1134844,1134845,1134846,1134847,1134848,1134849,1134850,1134851,1134852,1134853,1134854&amp;niet=4g&amp;nisd=false&amp;jsv=es6&amp;w=300&amp;h=286&amp;cols=1&amp;ref=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2F&amp;cxurl=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2Fso-17_430212.html&amp;pr=dtruyen.com&amp;lu=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2Fso-17_430212.html&amp;sessionId=6107da13-0279b&amp;pageView=1&amp;pvid=17b06abd970b9b95025&amp;implVersion=11&amp;dpr=1"></script><script type="text/javascript" charset="utf-8" referrerpolicy="strict-origin-when-cross-origin" src="https://servicer.adskeeper.co.uk/1118577/1?w=300&amp;h=250&amp;cols=1&amp;pv=5&amp;cbuster=1627904531261662498725&amp;uniqId=07643&amp;childs=1118586,1118587,1118588,1118589,1118590,1118591,1118592,1118593,1118594,1118595,1118596,1118597,1118598,1118599,1118600,1118601,1118602,1118603,1118604,1118605,1118606,1118607,1118608,1118609,1118610,1118611,1118612&amp;niet=4g&amp;nisd=false&amp;jsv=es6&amp;ref=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2F&amp;cxurl=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2Fso-17_430212.html&amp;pr=dtruyen.com&amp;lu=https%3A%2F%2Fdtruyen.com%2Fthien-tai-trieu-hoi-su%2Fso-17_430212.html&amp;sessionId=6107da13-0279b&amp;pageView=0&amp;pvid=17b06abd970b9b95025&amp;implVersion=11&amp;dpr=1"></script><style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_customer_chat_bubble_animated_no_badge{box-shadow:0 3px 12px rgba(0, 0, 0, .15);transition:box-shadow 150ms linear}.fb_customer_chat_bubble_animated_no_badge:hover{box-shadow:0 5px 24px rgba(0, 0, 0, .3)}.fb_customer_chat_bubble_animated_with_badge{box-shadow:-5px 4px 14px rgba(0, 0, 0, .15);transition:box-shadow 150ms linear}.fb_customer_chat_bubble_animated_with_badge:hover{box-shadow:-5px 8px 24px rgba(0, 0, 0, .2)}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}.fb_new_ui_mobile_overlay_active{overflow:hidden}@keyframes fb_mpn_landing_page_slide_in{0%{border-radius:50%;margin:0 24px;width:60px}40%{border-radius:18px}100%{margin:0 12px;width:100% - 24px}}@keyframes fb_mpn_landing_page_slide_in_from_left{0%{border-radius:50%;left:12px;margin:0 24px;width:60px}40%{border-radius:18px}100%{left:12px;margin:0 12px;width:100% - 24px}}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes fb_bounce_out_v2_mobile_chat_started{0%{opacity:1;top:0}100%{opacity:0;top:20px}}@keyframes fb_customer_chat_bubble_bounce_in_animation{0%{bottom:6pt;opacity:0;transform:scale(0, 0);transform-origin:center}70%{bottom:18pt;opacity:1;transform:scale(1.2, 1.2)}100%{transform:scale(1, 1)}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style></head>
<div id="main" class="main" data-type="chapter"> 
	<div id="chapter-page"> <div id="breadcrumb"> <span> <a href="{{URL('trangchu')}}" itemprop="item"><i class="fa-home"></i> <span itemprop="name">Trang Chủ</span>
	 <meta itemprop="position" content="1"></a> <i class="fa-angle-right"></i> </span> 
	 <h1><a href="{{URL('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}" itemprop="item"> 
		<span>{{$truyen_breadcrumb->theloai->tentheloai}}</span>
		 <meta itemprop="position" content="2"> </a> <i class="fa-angle-right"></i></h1>
		 <span>
		 	<a href="{{URL('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}"> 
		 		<span>{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</span> 
		 		<meta itemprop="position" content="3">
		 	</a>
		 </span>
		 <i class="fa-angle-right"></i>
		 <span>
		 	
		 		<span>{{$truyen_breadcrumb->tentruyen}}</span> 
		 		<meta itemprop="position" content="3">
		 	
		 </span> 
		</div> 
		<style> #chapter-content { background: #fff; font-family: Palatino Linotype, 'sans-serif'; font-size: 22px; line-height: 160%; } </style> 
		<div id="chapter"> <header> <p class="story-title">
			<a href="">{{$chapter->truyen->tentruyen}}</a></p> 
			<h2 class="chapter-title">{{$chapter->tieude}}</h2> 
			<p><i class="fa-user"></i> {{$chapter->truyen->tacgia}}</p> <p><i class="fa-clock"></i> 26/04/2014</p> </header> <div class="chapter-button clearfix"> 
				
				<a href="#" rel="nofollow" class="all-chapters"><i class="fa-list-bullet"></i> Chọn Chương</a>
				<select name="kichhoat" id="select-chapter" class="custom-select">
					@foreach($all_chapter as $value)
					<option value="{{URL('xem-chapter/'.$value->slug_chapter)}}">{{$value->tieude}}</option>
					@endforeach
				</select>

				<a href="#" rel="nofollow" class="config" title="Config"><i class="fa-cog"></i>
			</a> 
				
			</div>
			 <div id="configReader"><p><label>Màu nền</label><select id="config-background"><option value="262626">Màu tối</option><option value="fff">Mặc định</option><option value="f4f4f4">Xám nhạt</option><option value="e9ebee">Xanh nhạt</option><option value="E1E4F2">Xanh đậm</option><option value="F4F4E4">Vàng nhạt</option><option value="EAE4D3">Màu sepia</option><option value="FAFAC8">Vàng đậm</option><option value="EFEFAB">Vàng ố</option></select></p><p><label>Font chữ:</label><select id="config-font"><option value="Palatino Linotype">Palatino Linotype</option><option value="Bookerly">Bookerly</option><option value="Segoe UI">Segoe UI</option><option value="Patrick Hand">Patrick Hand</option><option value="Times New Roman">Times New Roman</option><option value="Verdana">Verdana</option><option value="Tahoma">Tahoma</option><option value="Arial">Arial</option></select></p><p><label>Chiều cao dòng:</label><select id="config-lineheight"><option value="100">100</option><option value="120">120</option><option value="140">140</option><option value="160">160</option><option value="180">180</option><option value="200">200</option></select></p><p><label>Kích cỡ chữ:</label><span><button id="size-increment"><i class="fa-zoom-in"></i></button><button id="size-decrement"><i class="fa-zoom-out"></i></button></span>
	</p>
</div> 
	<div id="chapter-content" data-vip="0">.
		<br>
		{!!$chapter->noidung!!}


		<div style="text-align: center; margin: 0 auto;"> <div style="text-align: center; margin: 0 auto; width: 300px;"> <!-- Composite Start --> <div id="M663485ScriptRootC1118577_07643"> <div id="AdskeeperComposite1118577_07643" style="overflow: visible; visibility: visible; width: auto; height: auto;"><style id="main_07643" class="AdskeeperC1118577" type="text/css">#AdskeeperComposite1118577_07643 .mgbox { padding: 0 !important; position: relative !important; text-align: center; vertical-align: top !important; margin: 0 auto; display: -ms-flexbox; -webkit-flex-direction: row; -ms-flex-direction: row; flex-direction: row; -webkit-flex-wrap: wrap; -ms-flex-wrap: wrap; flex-wrap: wrap; line-height: 100% !important; transition: none !important; box-sizing: border-box; background: #fff; } #AdskeeperComposite1118577_07643 .mgheader a { bottom: 4px !important; right: 0 !important; position: absolute !important; margin-right: 4px !important; z-index: 1; } #AdskeeperComposite1118577_07643 span.mghead { display: none !important; } #AdskeeperComposite1118577_07643 div.mcimg { margin: 0; padding: 0; text-align: center; } #AdskeeperComposite1118577_07643 div.mcimg img.mcimgad { position: relative; float: right; } #AdskeeperComposite1118577_07643 img.mcimg { width: 100% !important; height: auto !important; box-sizing: border-box; margin: 0; } #AdskeeperComposite1118577_07643 .mctitle { text-align: center; } #AdskeeperComposite1118577_07643 .mctitle a { font-size: 16px; line-height: 16px; font-style: normal; text-decoration: none; font-family: Verdana,Geneva,sans-serif; color: #333333; } #AdskeeperComposite1118577_07643 .mcdesc { display: none; text-align: center; } #AdskeeperComposite1118577_07643 .mcdesc a { font-weight: normal; font-size: 11px; line-height: 11px; font-style: normal; text-decoration: none; color: #666666; font-family: Verdana, sans-serif; } #AdskeeperComposite1118577_07643 .mcdomain { display: block; text-align: center; overflow: hidden; padding: 4px; } #AdskeeperComposite1118577_07643 .mcdomain a { display: block; padding: 5px 0 2px 0; overflow: hidden; text-transform: capitalize; font-size: 10px; line-height: 10px; font-style: italic; text-decoration: none; font-family: Verdana,Geneva,sans-serif; color: #bbbbbb; } #AdskeeperComposite1118577_07643 .mgline { background: none repeat scroll 0 0; cursor: pointer; display: inline-block; _overflow: hidden; *zoom: 1; *display: inline; padding: 0 !important; box-sizing: border-box; display: -ms-flexbox; display: -webkit-flex; display: flex; -webkit-flex-direction: column; -ms-flex-direction: column; flex-direction: column; word-wrap: break-word; vertical-align: top; position: relative; } #AdskeeperComposite1118577_07643 .mgline .fake { visibility: hidden; position: relative; } #AdskeeperComposite1118577_07643 .mgline:hover .mctitle a { color: #3f3f3f; text-decoration: underline !important; } #AdskeeperComposite1118577_07643 .mgline:hover .mcpriceold + .mcprice { visibility: hidden; } #AdskeeperComposite1118577_07643 .mgline:hover .mcpriceold { visibility: hidden; } #AdskeeperComposite1118577_07643 .mgline:hover .mcdiscount { display: block; position: absolute; left: 0; right: 0; top: 5px; } #AdskeeperComposite1118577_07643 .mgline, #AdskeeperComposite1118577_07643 .mgbox { min-width: 90px; } @supports not (flex-wrap: wrap) { #AdskeeperComposite1118577_07643 .mgbox { display: block !important; } #AdskeeperComposite1118577_07643 .mgline { display: inline-block !important; } } .text-elements a { text-decoration: none; } #AdskeeperComposite1118577_07643 div.mcprice { text-align: center; } #AdskeeperComposite1118577_07643 div.mcprice span { font-weight: bold; font-size: 12px; line-height: 12px; font-style: normal; text-decoration: none; color: #ffffff; font-family: Verdana, sans-serif; } #AdskeeperComposite1118577_07643 span.mcpriceold { text-decoration: line-through !important; } #AdskeeperComposite1118577_07643 .mgarrowbox { position: relative; width: 55%; height: 22px; margin: 0; border-color: transparent; display: inline-block; font-family: Verdana, sans-serif; } #AdskeeperComposite1118577_07643 .mgarrowbox:after { left: 100%; top: 50%; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; margin-top: -11px; border: solid 11px inherit; } #AdskeeperComposite1118577_07643 .mgbuybox { width: 40%; display: inline-block; text-align: right; font-weight: bold; font-family: Verdana, sans-serif; font-size: 12px; color: #666666; text-decoration: underline; } #AdskeeperComposite1118577_07643 .mctitle { line-height: 1 !important; } #AdskeeperComposite1118577_07643 .mcdesc { margin-top: 0; margin-bottom: 2px; } #AdskeeperComposite1118577_07643 .mcdesc a { line-height: 1.5 !important; } #AdskeeperComposite1118577_07643 div.mcprice { margin-top: 5px; line-height: 12px !important; } #AdskeeperComposite1118577_07643 .mgprice { display: inline-block; color: red; } #AdskeeperComposite1118577_07643 .mgtobottom { position: absolute; bottom: 0; width: 100%; text-align: left; } #AdskeeperComposite1118577_07643 .mgline .image-with-text, #AdskeeperComposite1118577_07643 .mgline .mgtobottom { width: 100% !important; margin: 0 auto; } #AdskeeperComposite1118577_07643 .mgline .image-with-text, #AdskeeperComposite1118577_07643 .mgline .mgtobottom { max-width: 492px; } #AdskeeperComposite1118577_07643 .mcpriceold { float: left; padding-left: 5px; } #AdskeeperComposite1118577_07643 .mcdiscount { display: none; } #AdskeeperComposite1118577_07643 div.mcprice, #AdskeeperComposite1118577_07643 div.mcriceold { font-weight: bold; font-size: 12px; line-height: 12px; font-style: normal; text-decoration: none; color: #ffffff; font-family: Verdana, sans-serif; } #AdskeeperComposite1118577_07643 div.mcpriceold { text-decoration: line-through !important; } /** Блок исправляющий ссылку. */ .widgets_logo a { bottom: 4px !important; right: 0 !important; margin-right: 4px !important; z-index: 1; } #AdskeeperComposite1118577_07643 .mgbox { margin-bottom: 0 !important; } #AdskeeperComposite1118577_07643 .mghead { display: none !important; } #AdskeeperComposite1118577_07643 .mgbox { width: 300px; height: 250px; display: -webkit-flex; display: flex; } #AdskeeperComposite1118577_07643 .mgline { width: calc((100% / 1) - 2%); max-width: calc((100% / 1) - 2%); margin: 0.5%; } #AdskeeperComposite1118577_07643 .mgline .mgtobottom { max-width: 300px; } #AdskeeperComposite1118577_07643 div.mcimg { margin: auto; max-height: 185px; overflow: hidden; } #AdskeeperComposite1118577_07643 img.mcimg { max-width: 300px; max-height: 200px; } #AdskeeperComposite1118577_07643 .mctitle { margin-top: 10px; } #AdskeeperComposite1118577_07643 .mgarrowbox { background: #4555a7; border-left-color: #4555a7; } #AdskeeperComposite1118577_07643 .mghead { color: #4555a7 !important; } #AdskeeperComposite1118577_07643 .mgbox { overflow: hidden; } #AdskeeperComposite1118577_07643 .mgline { min-width: 300px; min-height: 250px; max-width: 100%; max-height: 100%; margin: 0; } .widgets_logo { position: absolute !important; bottom: 5px !important; right: 0 !important; } #AdskeeperComposite1118577_07643 .mctitle { margin-top: 0; } #AdskeeperComposite1118577_07643 .mgheader a { bottom: 0 !important; } </style><style id="ssp_doubleclick_07643" class="AdskeeperC1118577" type="text/css">.AdskeeperDButton1118577{display:       inline-block;width:         168px;height:        48px;background:    -moz-linear-gradient(#111312, #010101);background:    -o-linear-gradient(#111312, #010101);background:    -webkit-linear-gradient(#111312, #010101);background:    linear-gradient(#111312, #010101);border:        1px solid #010101;color:         #fff !important;font:          normal 700 21px/48px "Zapf Dingbats", sans-serif;opacity: 0;left: -100%;text-align:    center;position: absolute;left: 0 !important;right: 0 !important;top: 0 !important;bottom: 0 !important;margin: auto !important;text-decoration: none !important;transition:all 1s;}.AdskeeperDLayout1118577{height: 100%;width: 100% !important;position: absolute !important;top: 0px;left: 0px;background-color: rgba(0, 0, 0, 0.5);z-index: 99999;}#AdskeeperComposite1118577 .mgline {position:relative}</style><div><div class="mgbox"><div class="mgheader"><div class="mgheader">
	
</div>
<style>
	.mghead {
        line-height: 20px;
        vertical-align: middle;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        text-align: left;
        font-family: Verdana, sans-serif;
        color: #4555a7;
        display: block;
        margin: 0 0 0px 5px;
        float: left;
    }
	.mgheader {
        display: table !Important;
        width: 100% !important;
    }

    div.mg_addad1118577 {
        text-align: right;
        opacity: 0.5;
        margin-right: 10px;
        display: inline-block;
        float: right;
    }

    div.mg_addad1118577:hover {
        opacity: 1
    }

    div.mg_addad1118577 a {
        color: #000000;
        font: normal 10px Myriad Pro;
        text-decoration: none;
    }

    div.mg_addad1118577 img {
        margin: 0px -5px 0px 0px;
        border: 0px;
        float: none;
        padding: 0px;
    }
</style>

</div></div></div><style id="contentPreview_07643" class="AdskeeperC1118577" type="text/css">.image-container {
overflow: hidden;}
.preload {
  background: #2a397b;
  left: -100%;
  position: absolute;
  top: 0;
  height: 4px;
  width: 100%;
  z-index: 2;
  -webkit-animation: preloadAnimation linear .8s;
  -moz-animation: preloadAnimation linear .8s;
  -ms-animation: preloadAnimation linear .8s;
  -o-animation: preloadAnimation linear .8s;
  animation: preloadAnimation linear .8s;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -ms-animation-iteration-count: 1;
  -o-animation-iteration-count: 1;
  animation-iteration-count: 1;
}
@keyframes preloadAnimation {
  0% {
    transform: translateX(0)
  }
  90% {
    transform: translateX(100%)
  }
  100% {
    transform: translateY(-2px)
  }
}
@-moz-keyframes preloadAnimation {
  0% {
    -moz-transform: translateX(0)
  }
  90% {
    -moz-transform: translateX(100%)
  }
  100% {
    -moz-transform: translateY(-2px)
  }
}
@-ms-keyframes preloadAnimation {
  0% {
    -ms-transform: translateX(0)
  }
  90% {
    -ms-transform: translateX(100%)
  }
  100% {
    -ms-transform: translateY(-2px)
  }
}</style></div></div>  <!-- Composite End --> </div> </div> <br><br><br><br> <div style="text-align: center; margin: 0 auto;"> <div style="text-align: center; margin: 0 auto; width: 300px;"> <!-- Composite Start --> <div id="M663485ScriptRootC1134825_146ba"> <div id="AdskeeperComposite1134825_146ba" style="overflow: visible; visibility: visible; width: auto; height: auto;"><style id="ssp_doubleclick_146ba" class="AdskeeperC1134825" type="text/css">.AdskeeperDButton1134825{display:       inline-block;width:         168px;height:        48px;background:    -moz-linear-gradient(#111312, #010101);background:    -o-linear-gradient(#111312, #010101);background:    -webkit-linear-gradient(#111312, #010101);background:    linear-gradient(#111312, #010101);border:        1px solid #010101;color:         #fff !important;font:          normal 700 21px/48px "Zapf Dingbats", sans-serif;opacity: 0;left: -100%;text-align:    center;position: absolute;left: 0 !important;right: 0 !important;top: 0 !important;bottom: 0 !important;margin: auto !important;text-decoration: none !important;transition:all 1s;}.AdskeeperDLayout1134825{height: 100%;width: 100% !important;position: absolute !important;top: 0px;left: 0px;background-color: rgba(0, 0, 0, 0.5);z-index: 99999;}#AdskeeperComposite1134825 .mgline {position:relative}</style><style id="split_style_146ba" class="AdskeeperC1134825" type="text/css">#AdskeeperComposite1134825_146ba .mgresponsive {
  display: inherit;
}
#AdskeeperComposite1134825_146ba .mgbox {
  padding: 0 !important;
  position: relative !important;
  text-align: center;
  vertical-align: top !important;
  margin: 0 auto;
  border-style: solid;
  border-width: 0px;
  border-color: ;
  background-color: #ffffff;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  line-height: 100% !important;
  transition: none !important;
  box-sizing: border-box;
}
#AdskeeperComposite1134825_146ba .mgline {
  position: relative;
}
#AdskeeperComposite1134825_146ba .mgline .image-with-text {
  position: relative;
}
#AdskeeperComposite1134825_146ba .mgbox {
  width: 100%;
  max-width: 100%;
}
#AdskeeperComposite1134825_146ba div.mcimg {
  padding: 0px;
  text-align: center;
}
#AdskeeperComposite1134825_146ba img.mcimg {
  border-style: solid;
  border-color: #ffffff;
  border-width: 0px;
  width: 100% !important;
  height: auto !important;
  max-width: 492px;
  max-height: 328px;
  box-sizing: border-box;
  display: block;
}
#AdskeeperComposite1134825_146ba .mctitle {
  margin-top: 10px;
  text-align: center;
}
#AdskeeperComposite1134825_146ba .mctitle a {
  font-weight: bold;
  font-size: 17px;
  line-height: 17px;
  font-style: normal;
  text-decoration: none;
  color: #3f3f3f;
  font-family: Arial,Helvetica,sans-serif;
}
#AdskeeperComposite1134825_146ba .mcdesc {
  display: none;
  text-align: center;
}
#AdskeeperComposite1134825_146ba .mcdesc a {
  font-weight: normal;
  font-size: 11px;
  line-height: 11px;
  font-style: normal;
  text-decoration: none;
  color: #444444;
  font-family: Arial,Helvetica,sans-serif;
}
#AdskeeperComposite1134825_146ba .mcdomain {
  display: none;
  text-align: center;
}
#AdskeeperComposite1134825_146ba .mcdomain a {
  font-weight: normal;
  font-size: 12px;
  line-height: 12px;
  font-style: italic;
  text-decoration: none;
  color: #159417;
  font-family: Arial,Helvetica,sans-serif;
  padding: 4px;
  display: block;
  overflow: hidden;
  text-transform: capitalize;
}
#AdskeeperComposite1134825_146ba .mcdomain a img.mcimgsrc {
  vertical-align: bottom;
  margin-bottom: -3px;
  height: 20px;
  width: 20px;
  display: inline-block;
}
#AdskeeperComposite1134825_146ba .mgline {
  background: none repeat scroll 0 0;
  background-color: #ffffff;
  cursor: pointer;
  display: inline-block;
  overflow: hidden;
  zoom: 1;
  display: inline;
  padding: 0 !important;
  border-style: solid;
  border-color: #bfbfbf;
  border-width: 1px;
  width: 99%;
  max-width: 99%;
  box-sizing: border-box;
  margin: 10px 0.5%;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  word-wrap: break-word;
}
#AdskeeperComposite1134825_146ba .mgline .image-container {
  position: relative;
}
#AdskeeperComposite1134825_146ba .mgline .image-container .mcimgad {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 20px;
  height: 20px;
}
#AdskeeperComposite1134825_146ba .mgline {
  vertical-align: top;
}
#AdskeeperComposite1134825_146ba .mgline,
#AdskeeperComposite1134825_146ba .mgbox {
  min-width: 90px;
}
#AdskeeperComposite1134825_146ba .mgline[max-width~="120px"] .mcdesc {
  display: none !important;
}
@supports not (flex-wrap: wrap) {
  #AdskeeperComposite1134825_146ba .mgbox {
    display: block !important;
  }
  #AdskeeperComposite1134825_146ba .mgline {
    display: inline-block !important;
  }
}
.text-elements a {
  text-decoration: none;
}
#AdskeeperComposite1134825_146ba div.mcprice {
  text-align: left;
}
#AdskeeperComposite1134825_146ba div.mcprice span {
  font-weight: bold;
  font-size: 14px;
  line-height: 14px;
  font-style: normal;
  text-decoration: none;
  color: #222222;
  font-family: Arial,Helvetica,sans-serif;
}
#AdskeeperComposite1134825_146ba div.mgbuybox,
#AdskeeperComposite1134825_146ba div.mgarrowbox {
  display: true;
}
#AdskeeperComposite1134825_146ba div.mgbuybox,
#AdskeeperComposite1134825_146ba div.mgarrowbox {
  display: inline-block;
}
#AdskeeperComposite1134825_146ba div.mcprice {
  display: block;
}
#AdskeeperComposite1134825_146ba span.mcpriceold {
  text-decoration: line-through !important;
}
@media (max-width: 480px) {
  #AdskeeperComposite1134825_146ba .mgline {
    width: 48% !important;
    margin: 1% !important;
    max-width: 48% !important;
  }
}
@media (max-width: 480px) {
  #AdskeeperComposite1134825_146ba .mgline {
    width: 98% !important;
    margin: 1% !important;
    max-width: 98% !important;
  }
}
#AdskeeperComposite1134825_146ba img.mcimg {
  opacity: 1 !important;
  margin: 0;
}
#AdskeeperComposite1134825_146ba .mctitle {
  margin-top: 2px;
  line-height: 1 !important;
}
#AdskeeperComposite1134825_146ba .mcdesc {
  margin-top: 0;
  margin-bottom: 2px;
}
#AdskeeperComposite1134825_146ba .mghead {
  font-family: Arial,Helvetica,sans-serif !important;
  color: #3f3f3f;
  font-size: 14px !important;
  text-transform: uppercase !important;
}
#AdskeeperComposite1134825_146ba .mcprice-wrap {
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  text-decoration: none;
}
#AdskeeperComposite1134825_146ba .mgarrowbox {
  position: relative;
  background: #2c73a8;
  padding-right: 8px;
}
#AdskeeperComposite1134825_146ba .mgarrowbox:before {
  content: '';
  position: absolute;
  top: 0;
  right: -10px;
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
  border-left: 10px solid #2c73a8;
}
#AdskeeperComposite1134825_146ba .mcprice-wrap_old .mgarrowbox {
  background: #fff;
}
#AdskeeperComposite1134825_146ba .mcprice-wrap_old .mgarrowbox:before {
  border-left: 10px solid #fff;
}
#AdskeeperComposite1134825_146ba .mcdiscount {
  display: block;
  color: #fff;
  font-size: 1.21em;
}
#AdskeeperComposite1134825_146ba div.mcprice-cover {
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-align-items: stretch;
  -moz-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  height: 42px;
  font-size: 14px;
}
#AdskeeperComposite1134825_146ba div.mcprice-cover .mcprice {
  font-size: 1.29em;
  color: #fff;
}
#AdskeeperComposite1134825_146ba div.mcprice-cover.mcprice-cover_old .mcprice-inner {
  padding-top: 4px;
  width: auto;
}
#AdskeeperComposite1134825_146ba div.mcprice-cover.mcprice-cover_old .mcprice-val {
  padding-right: 0;
}
#AdskeeperComposite1134825_146ba div.mcprice-cover.mcprice-cover_old .mcprice {
  margin-bottom: 4px;
  color: #222222;
  font-size: 1em;
}
#AdskeeperComposite1134825_146ba div.mcprice-cover.mcprice-cover_old + .mcprice-cover {
  display: none !important;
}
#AdskeeperComposite1134825_146ba .mcprice-val,
#AdskeeperComposite1134825_146ba .mcprice-inner {
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  white-space: nowrap;
}
#AdskeeperComposite1134825_146ba .mcprice-inner {
  background: #222;
  position: relative;
  padding: 0 2px 0 8px;
  text-align: center;
  color: #fff;
  width: 100%;
}
#AdskeeperComposite1134825_146ba .mcprice-inner:before {
  content: '';
  position: absolute;
  top: 0;
  right: -10px;
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
  border-left: 10px solid #ed181d;
}
#AdskeeperComposite1134825_146ba .mcprice-inner:after {
  content: '';
  position: absolute;
  top: 0;
  right: -10px;
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
  border-left: 10px solid #222;
}
#AdskeeperComposite1134825_146ba .mcprice-val {
  padding: 2px 10px 0 14px;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-items: flex-start;
  -moz-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  font-weight: bold;
  font-style: normal;
  text-align: left;
}
#AdskeeperComposite1134825_146ba .mcpriceold {
  display: block !important;
  position: relative;
  width: 100%;
  font-size: 0.78em;
  font-weight: inherit;
  color: #ed181d;
}
#AdskeeperComposite1134825_146ba .mcpriceold span {
  position: relative;
}
#AdskeeperComposite1134825_146ba .mcpriceold span:before {
  content: '';
  height: 1px;
  background: #ed181d;
  left: 0;
  right: 0;
  top: 50%;
  margin-top: -1px;
  position: absolute;
}
#AdskeeperComposite1134825_146ba div.mcprice,
#AdskeeperComposite1134825_146ba div.mcriceold {
  font-weight: bold;
  font-size: 14px;
  line-height: 14px;
  font-style: normal;
  text-decoration: none;
  color: #222222;
  font-family: Arial,Helvetica,sans-serif;
}
#AdskeeperComposite1134825_146ba .mgline:hover .mctitle a {
  color: #3f3f3f;
  text-decoration: underline !important;
}
#AdskeeperComposite1134825_146ba .mgline[max-width~="120px"] .mgarrowbox,
#AdskeeperComposite1134825_146ba .mgline[max-width~="120px"] .mgbuybox {
  display: none !important;
}
#AdskeeperComposite1134825_146ba .mg-slider-overlay {
  overflow: hidden;
  position: relative;
}
#AdskeeperComposite1134825_146ba .mg-slider-overlay .mg-slider-wrap {
  min-height: 200px;
  position: relative;
  width: 100%;
  -webkit-transform: translate3D(0, 0, 0);
  -moz-transform: translate3D(0, 0, 0);
  -ms-transform: translate3D(0, 0, 0);
  -o-transform: translate3D(0, 0, 0);
  transform: translate3D(0, 0, 0);
  -webkit-transition-duration: 200ms;
  -moz-transition-duration: 200ms;
  -ms-transition-duration: 200ms;
  -o-transition-duration: 200ms;
  transition-duration: 200ms;
}
#AdskeeperComposite1134825_146ba .mg-slider-overlay .mg-slider-wrap .mg-slider-box {
  left: 0;
  top: 0;
  position: absolute;
  width: 100%;
}
#AdskeeperComposite1134825_146ba .mg-pagination {
  text-align: center;
}
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-list {
  display: inline-block;
}
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item {
  cursor: pointer;
  display: inline-block;
  *display: inline;
  *zoom: 1;
  width: 8px;
  height: 8px;
  margin: 0 2px;
  background: #ddd;
  border-radius: 50%;
}
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item-prev,
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item-next {
  background: #f7f7f7;
  border: 1px solid #cecece;
  border-radius: 2px;
  cursor: pointer;
  display: inline-block;
  height: 11px;
  margin: 0 10px;
  padding: 5px 0;
  text-align: center;
  vertical-align: middle;
  width: 29px;
}
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item-prev:after,
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item-next:after {
  background: url(https://images.dable.io/static/i/prevnext2.png?3) no-repeat 0 0;
  background-size: 17px 11px;
  content: "";
  display: inline-block;
  height: 13px;
  width: 9px;
}
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item-next:after {
  background-position: -10px 0;
  width: 8px;
}
#AdskeeperComposite1134825_146ba .mg-pagination .mg-pagination-item-current {
  background: #508eef;
}
</style><div><div class="mgbox"><div class="mgheader">
	<span class="mghead"></span>
	<div class="mg_addad1134851">
		<a href="https://widgets.adskeeper.com/?utm_source=widget_adskeeper&amp;utm_medium=text&amp;utm_campaign=add&amp;utm_content=1134851" target="_blank" rel="nofollow noopener">
			<img src="https://cdn.adskeeper.co.uk/images/adskeeper_svg.svg" alt="Adskeeper" title="Adskeeper">
		</a>
	</div>
</div>
<style>
	.mghead {
        line-height: 20px;
        vertical-align: middle;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        text-align: left;
        font-family: Verdana, sans-serif;
        color: #4555a7;
        display: block;
        margin: 0 0 0px 5px;
        float: left;
    }
	.mgheader {
        display: table !Important;
        width: 100% !important;
    }

    div.mg_addad1134851 {
        text-align: right;
        opacity: 0.5;
        margin-right: 10px;
        display: inline-block;
        float: right;
    }

    div.mg_addad1134851:hover {
        opacity: 1
    }

    div.mg_addad1134851 a {
        color: #000000;
        font: normal 10px Myriad Pro;
        text-decoration: none;
    }

    div.mg_addad1134851 img {
        margin: 0px -5px 0px 0px;
        border: 0px;
        float: none;
        padding: 0px;
    }
</style>

</div>
</div>
<style id="contentPreview_146ba" class="AdskeeperC1134825" type="text/css">.image-container {
overflow: hidden;}
.preload {
  background: #2a397b;
  left: -100%;
  position: absolute;
  top: 0;
  height: 4px;
  width: 100%;
  z-index: 2;
  -webkit-animation: preloadAnimation linear .8s;
  -moz-animation: preloadAnimation linear .8s;
  -ms-animation: preloadAnimation linear .8s;
  -o-animation: preloadAnimation linear .8s;
  animation: preloadAnimation linear .8s;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -ms-animation-iteration-count: 1;
  -o-animation-iteration-count: 1;
  animation-iteration-count: 1;
}
@keyframes preloadAnimation {
  0% {
    transform: translateX(0)
  }
  90% {
    transform: translateX(100%)
  }
  100% {
    transform: translateY(-2px)
  }
}
@-moz-keyframes preloadAnimation {
  0% {
    -moz-transform: translateX(0)
  }
  90% {
    -moz-transform: translateX(100%)
  }
  100% {
    -moz-transform: translateY(-2px)
  }
}
@-ms-keyframes preloadAnimation {
  0% {
    -ms-transform: translateX(0)
  }
  90% {
    -ms-transform: translateX(100%)
  }
  100% {
    -ms-transform: translateY(-2px)
  }
}</style></div>
<script charset="utf-8" src="https://cm.adskeeper.co.uk/i.js?&amp;cbuster=1627904531364443426551" type="text/javascript" async=""></script>
</div> 
<script src="https://jsc.adskeeper.co.uk/a/d/adh.webtruyen.com.1134825.js" async=""> </script>
 <!-- Composite End --> </div> </div> <br><br>
</div> <p class="text-webtruyen">Bạn đang đọc truyện trên: <span style="color: blue; font-weight: bold;">Dtruyen.com</span> </p> <div class="wt-ads"><div class="half"> <a target="_blank" href="https://dtruyen.com/con-duong-ba-chu/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=boost_top" title="con đường bá chủ"><img src="https://img.dtruyen.com/banner/con-duon-ba-chu.jpg" width="300" height="250" alt="con đường bá chủ"></a> </div><div class="half"> <a target="_blank" href="https://dtruyen.com/van-co-than-de/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=boost_top" title="Vạn Cổ Thần Đế"><img src="https://img.dtruyen.com/banner/van-co-than-de.jpg" width="300" height="250" alt="Vạn Cổ Thần Đế"></a> </div></div>
<style>
	.isDisabled{
		color: currentColor;
		pointer-events: none;
		opacity: 0.5;
		text-decoration: none;
	}
</style> 
<div class="chapter-button clearfix"> 
	<a href="{{URL('xem-chapter/'.$previous_chapter)}}" class="chap-nav {{$chapter->id == $min_id->id ? 'isDisabled' : ''}}"><i class="fa-angle-left"></i> Trước</a> 
	<a href="#" rel="nofollow" class="config" title="Config"><i class="fa-cog"></i></a> 
	<a href="{{URL('xem-chapter/'.$next_chapter)}}"  class="chap-nav {{$chapter->id == $max_id->id ? 'isDisabled' : ''}}">Sau <i class="fa-angle-right"></i></a> </div> 
	<div class="wt-ads2"> <a href="https://dtruyen.com/truyen-full/" target="_blank" title="truyen full">
		<img src="https://dtruyen.com/quangcao/truyen-full.jpg" alt="truyện full" style="margin-top: 10px;"></a> 
	</div>
	</div> 
		 <div class="container"> 
		 	<div class="main-col"> 
		 		<div class="card-box" id="comments"> 
		 			<header>
		 				<h3><i class="fa-chat"></i> Nhận xét của độc giả về truyện Thiên Tài Triệu Hồi Sư</h3></header> 
		 				<form class="comment-form" method="post"> 
		 					<input type="hidden" name="storyID" id="storyID" value="4497"> 
		 					<input type="hidden" value="0"> 
		 					<textarea aria-label="Bình luận" id="comment-message" name="message" placeholder="Nội dung bình luận tối thiểu 15 ký tự, tối đa 500 ký tự!"></textarea> 
		 					<p id="comment-char-count">Số ký tự: <span>0</span></p> 
		 					<div class="text-right"> 
		 						<button type="submit"><i class="fa-paper-plane"></i> Gửi</button> 
		 					</div> 
		 				</form> 
		 				<ul id="comment-list" class="comment-list">
		 					<li id="comment113873" class="comment clearfix ">
							<span class="avatar-letter">TN</span>
							<div class="comment-content">
								<div class="userinfo"><p><span><a href="">Thắm Nguyễn</a>
								</span></p>
								<p class="labels"></p> <i class="fa fa-circle"></i> 
								<time itemprop="commentTime">1/8/2021</time>
								</div>
                                        <p class="message" itemprop="commentText">Đọc 5-6 năm rồi vẫn chưa full .ôi trời</p> 
                            </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li>
                         </ul>
                          <div id="comment-more"><a href="#" data-paged="2" rel="nofollow"><i class="fa-angle-down"></i> Xem thêm</a></div> 
                          </div>

                          <!-- facebook comment-->
                    		 <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
                          
                          </div>
                           </div></div><script>editorids = []; storytype = 0;storyname='Thiên Tài Triệu Hồi Sư'; storyData = {id:4497,key:'thien-tai-trieu-hoi-su',status:'ongoing',name:'Thiên Tài Triệu Hồi Sư',donate:0,type:0,state:'ongoing',schedule:'',authors:null,MaxBook:6,MaxChapter:92};
chapterData = {"id":"430212","book":"1","chapter":"1","alias":"so-17"}</script></div>
@endsection