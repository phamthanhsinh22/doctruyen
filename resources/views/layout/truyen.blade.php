@extends('layout/master')
@section('Title','truyen')
@section('truyen')
<head> <link rel="icon" type="image/png" href="https://dtruyen.com/frontend/img-thumb/favicon.ico"> <title>Thiên Tài Triệu Hồi Sư</title> <link href="https://img.dtruyen.com"> <link href="https://connect.facebook.net"> <link href="https://www.google-analytics.com"> <link href="https://www.googletagmanager.com"> <link href="https://dtruyen.com/thien-tai-trieu-hoi-su/"> <link href="https://img.dtruyen.com/desktop/css/main.css?v=0.0.3" as="style"><link href="https://img.dtruyen.com/desktop/js/main_events.js" as="script"> <style>@charset "utf-8";
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
.fa-folder-open:before{content:'\e80f';}
.fa-home:before { content: '\e806'; }
.fa-paper-plane:before { content: '\f1d8'; }
.fa-chat:before { content: '\e809'; }
.fa-list-bullet:before { content: '\f0ca'; }
.fa-doc-text:before { content: '\f0f6'; }
.fa-star:before{content:'\e807';}
.news-item .thumb{width:70px;padding:10px;float:left;}
.news-item .thumb img{height:auto;}
.news-item .title{padding-top:10px;padding-right:10px;font-weight:normal;margin-left:70px;}
.news-item .title a{color:#444;text-transform: capitalize;}
.categories a{width:50%;float:left;padding: 6px 6px 6px 20px;color:#444;text-transform: capitalize;}
.categories a:nth-of-type(1),.categories a:nth-of-type(2),.categories a:nth-of-type(3),.categories a:nth-of-type(4){ font-weight:600;color:#df1a0c;
}
.categories a:before{font-family: webtruyen_icon;display:inline-block;vertical-align: baseline;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale; content:"\e801";margin-right:5px;}
.categories a:nth-of-type(1):before,.categories a:nth-of-type(2):before,.categories a:nth-of-type(3):before,.categories a:nth-of-type(4):before{ content:"\f219";
}
#story-detail{display:flex;width:100%;background: #fff;padding:10px;border: 1px solid #ddd;margin-bottom: 15px;}
#story-detail .col1{width:220px;flex-shrink: 0;margin-right:20px;}
#story-detail .col2{flex-grow: 1;}
#story-detail .thumb{position: relative;margin-bottom: 15px;overflow: hidden;}
#story-detail .label-vip-1,#story-detail .label-hot-1{position: absolute;top:10px; width: 100px;height:30px;line-height:30px;text-align:center;font-size:18px;color:#fff; transform-origin: center;-webkit-transform-origin: center;-moz-transform-origin: center;-ms-transform-origin: center;}
#story-detail .label-vip-1{background:#df1a0c;left:-25px;transform: rotate(-45deg);-webkit-transform: rotate(-45deg);-moz-transform: rotate(-45deg);-ms-transform: rotate(-45deg);display:none;}
#story-detail .label-hot-1{background:#2c7abe;right:-25px;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);-ms-transform: rotate(45deg);}
#story-detail .label-vip-1:before{content:"VIP";}
#story-detail .label-hot-1:before{content:"HOT";}
#story-detail .label-type-1,#story-detail .label-type-2,#story-detail .label-type-3{ position: absolute;left:10px;top:10px; width:60px;height:70px;line-height:48px;background: url(https://img.dtruyen.com/badge2.svg) no-repeat;background-size: contain; color:#fff;font-weight:bold;text-align:center;font-size: 1.5em;
}
#story-detail .label-type-1::before{content:"ST"}
#story-detail .label-type-2::before{content:"D"}
#story-detail .label-type-3::before{content:"CV"}
#story-detail .infos p{margin: 8px 0;line-height: 1.5;display:flex;}
#story-detail .infos p i{width:20px;color:#555;flex-shrink: 0;}
#story-detail .infos p span{flex-grow: 1;flex-wrap: wrap;}
#story-detail .infos p span a:after{content:", ";}
#story-detail .infos p span a:last-child:after{content:"";}
#story-detail .title{text-transform: uppercase;color:#df1a0c;font-size: 22px;font-weight: 700;text-align: center;}
#story-detail .rate{text-align:center;margin: 8px 0;}
#story-detail .actions{text-align:center;margin-bottom:15px;}
#story-detail .actions a,.comment-form [type="submit"],.replyComment button{display:inline-block;padding: 6px 16px;white-space: nowrap;border-radius: 2px;color:#fff;}
#story-detail .actions a.read-btn,#story-detail .actions a.chapter-list{background: #2c7abe;font-size: 13px;}
#story-detail .actions a#add_favorite{background:#e91b0c;margin-top: 10px;}
#story-detail .actions a.read-btn{padding: 12px 16px;font-weight: bold;text-transform: uppercase;}
#story-detail .actions hr{border-top:none;margin-top:10px;}
#story-detail .actions .reading-info{color: #666;padding: 10px 0;font-size: 13px;text-transform: capitalize;}
#story-detail .desc-title{margin: 8px 0;border: 1px solid #eee;width: 100vw; margin-left: -10px; padding: 10px 5px;}
#story-detail .description{overflow: hidden; padding-top: 15px; height: 310px; border-top: 1px solid #ddd; position: relative;font-size:15px;line-height:1.5;}
#story-detail .description:after { content: "Xem thêm"; position: absolute; left: 0; right: 0; bottom: 0; line-height: 20px; font-size: 13px; font-style: italic; color: #4267b2; text-align: center; background: rgba(255,255,255,0.9);
}
#story-detail .description.show { height: auto; padding-bottom: 30px;
}
#story-detail .description.show:after{content:"Rút gọn";}
.combo-box{padding: 20px;text-align: center;position: relative; border: 2.5px dashed #2c7abe;}
.combo-box p{font-size: 1.3em;margin-bottom: 10px;}
.combo-box span{display:block;}
.combo-box .point{color: #e74c3c;}
.combo-box .guide{font-size: 12px;font-style: italic;color: #888;}
#buy-combo{display: inline-block;cursor: pointer; padding: 6px 16px; white-space: nowrap; border-radius: 2px; color: #fff;background: #2c7abe; font-size: 14px;border:none;text-transform: uppercase;line-height: 30px;}
.rate-holder{position: relative;color: #fafafa;display: inline-block;text-align: left;font-family: webtruyen_icon;font-size:18px;}
.rate-holder:after{content:"\e807 \e807 \e807 \e807 \e807 \e807 \e807 \e807 \e807 \e807";text-shadow: 0 0 1px #000;letter-spacing: 5px;}
.rate-holder span { position: absolute; top: 0; left: 0; color: #ffc74c; overflow: hidden; height: 100%; white-space: nowrap;
}
.rate-holder p{ position: absolute; top: 0; left: 0; color: #ffc74c; overflow: hidden; height: 100%; white-space: nowrap; width:100%; letter-spacing: 5px;
}
.rate-holder p i{opacity:0;}
.rate-holder p i:hover{opacity:0.5;color: #000;}
.rate-holder span:after{content:"\e807 \e807 \e807 \e807 \e807 \e807 \e807 \e807 \e807 \e807";letter-spacing: 5px;}
.chapters li{border-bottom: 1px dashed #ddd;}
.chapters li a{ padding: 6px 2px 6px 16px; color:#333; display:block; font-size:15px; text-transform: capitalize;
}
.chapters li:hover {background:#eee;}
.chapters li a:visited{color:#888;}
.chapters li.vip-1:before,.chapters.v1 li.vip-0:before{display:none;position: absolute;left:0;top: 5px;text-align: center; width: 20px; font-size: 11px; height: 16px; line-height: 16px; color: #fff; background: #e74c3c;}
.chapters.v1 li.vip-0:before{content:"FREE";border: 1px solid #090;background:#090;font-weight: 500; padding: 0 3px; letter-spacing: -1px; margin-left: 5px;}
.chapters li:last-child{border-bottom:none;}
.pagination-control{margin: 10px 0;text-align:center;}
.pagination-control .pagination li{display:inline-block;}
.pagination-control .pagination li a{padding: 5px 12px;display:inline-block;color:#737373;font-size:18px;font-weight:500;}
.pagination-control .pagination li.active a{background:#2F52B2;color:#fff;}
.goto{width:170px;margin: 5px auto 15px auto;}
.goto label{font-size: 12px;line-height: 34px;float:left;margin-right:5px;}
.goto input{height:34px;box-sizing: border-box;border: 1px solid #ddd;width:60px;float:left;}
.goto button{background: #2F52B2;color:#fff;border:none;line-height: 34px;padding: 0 10px;cursor: pointer;}
.comment-form{padding: 20px;}
.comment-form textarea{width:100%;height:70px;padding:10px;background:#f2f2f2;}
.comment-form [type="submit"]{border:none;background:#2980b9;color:#fff;}
#comment-char-count{font-style: italic;font-weight:600;font-size:13px;}
#comment-char-count span{color:#e74c3c;}
.comment-form .text-right{text-align:right;}
#comment-more{text-align: center;margin-bottom: 10px;}
#comment-more a{display: inline-block;outline: 0;padding: 6px 16px;cursor: pointer; white-space: nowrap;background-color: #757575;color:#fff;border-radius:30px;}
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
.donateBox{ color: #285b2a; background-color: #e2f2e3; position: relative; padding: .9375rem 1.25rem; margin-bottom: 1.25rem; border: 1px solid #5ab55e; text-align: center; font-size: 1.1em; line-height: 1.3em; font-weight: 500;
}
.donateBox p{margin-bottom: 7px;}
#show-donate-box{display: inline-block; padding: 6px 16px; white-space: nowrap; border-radius: 2px; color: #fff;background: #2c7abe; font-size: 13px;text-transform: capitalize;}
.list-stories>ul{display:flex;}
.list-stories li{margin:0 10px;padding:15px;border-bottom: 1px dashed #e5e6e9;width:50%;}
.related-story{display:flex;}
.related-story .thumb{display:block;width:35px;margin-right:10px;flex-shrink: 0;}
.related-story .info{flex-grow: 1;}
.related-story .info .title{ font-size: 15px; line-height: 14px; font-weight: 600; letter-spacing: -1px; display: inline;
}
.related-story .info .title a{color: #444;}
.related-story .last-chap{width:150px;font-size: 12px;color: #707070;flex-shrink: 0;}
.related-story p{font-size: 15px;color: #000;margin-top: 4px;}</style> <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MCG6LV5"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-MCG6LV5');</script><script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"AggregateRating","itemReviewed":{"@type":"Book","image":"https:\/\/img.dtruyen.com\/public\/images\/large\/thientaitrieuhoisuBCbR4PTKBP.jpg","name":"Thi\u00ean T\u00e0i Tri\u1ec7u H\u1ed3i S\u01b0"},"ratingValue":7.4,"bestRating":10,"ratingCount":"2194"}</script> </head>
<div id="main" class="main">
	<div class="container">
		<div class="main-col">
			<div id="breadcrumb"> <a href="{{URL('trangchu')}}"><i class="fa-home"></i> <span>Trang Chủ</span></i> </span> 
            <i class="fa-angle-right"></i>
                <span><a href="{{URL('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}"> <span>{{$truyen->danhmuctruyen->tendanhmuc}}</span> </a></span>
            <i class="fa-angle-right"></i>
                 <span>{{$truyen->tentruyen}}</span>
            </div> 
            <div> 
                <div id="story-detail"> 
                <div class="col1"> 
                    <div class="thumb"><img src="{{asset('uploads/truyen/'.$truyen->hinhanh)}}" class="cover" width="220" height="283"><span class="label-vip-1"></span><span class="label-hot-1"></span><span class="label-type-2"></span></div> <div class="infos"> <p class="author"><i class="fa-user"></i> <span><a href="https://dtruyen.com/tac-gia/nam-am-am/">{{$truyen->tacgia}}</a> </span></p> <p class="story_categories"><i class="fa-folder-open"></i> <span><a href="{{URL('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></span>
                    </p> 
                    <p class="story_categories"><i class="fa-folder-open"></i> <span>Thể loại: 
                    	@foreach($truyen->thuocnhieutheloaitruyen as $thuocloai)
                    	<a href="{{URL('the-loai/'.$thuocloai->slug_theloai)}}"> {{$thuocloai->tentheloai}}</a></span>
                    	@endforeach
                    </p>

                     <p><i class="fa-eye"></i> 8,851,151</p> <p><i class="fa-star"></i> Hoàn Thành</p> <p><i class="fa-refresh"></i> 10:10:26 28/07/2021</p> </div> </div> <div class="col2"> 
                    <h1 class="title">{{$truyen->tentruyen}}</h1>
                <div class="rate"> 
                    <div class="rate-holder"><span style="width:71%"></span>
                        <p id="rating-action"><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i><i class="fa-star"></i></p></div> <div class="small"><em>Đánh giá: <strong><span>7.1</span></strong>/<span class="text-muted">10</span> từ <strong><span>784</span> lượt</strong></em></div> </div> 
                        <div class="actions"> 
                            <a class="chapter-list" href="#chapters" rel="nofollow"><i class="fa-list-bullet"></i> Danh sách chương</a> 
                            
                            @if($chapter_dau)
                            <a id="add_favorite" href="#" rel="nofollow"><i class="fa-heart-empty"></i> Truyện Yêu Thích</a> <hr> <a href="{{URL('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="read-btn"><i class="fa-doc-text"></i> Đọc Truyện</a>
                            @else
                            <a id="add_favorite" href="#" rel="nofollow"><i class="fa-heart-empty"></i> Truyện Yêu Thích</a> <hr> <a href="" class="read-btn"><i class="fa-doc-text"></i> Chưa có truyện để đọc</a>
                            @endif 
                        </div> 
                        <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="large"><a target="_blank" href="{{\URL::current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

                        <div class="description"><p>{{$truyen->tomtat}}</p> </div> 
                    </div> 
                </div> 
                <div class="card-box combo-box"> 
                    <span class="guide">*Bạn sẽ được cấp số lần đọc bằng tổng số chương có phí của truyện này</span> 
                </div> 
                <div class="card-box"> <div class="list-stories"> <ul> </ul> </div> </div> 
                <div class="card-box" id="chapters">
                	<header><h3><i class="fa-list-bullet"></i> Chương mới nhất của VUA HẢI TẶC</h3></header>
                    <ul class="chapters v1">
                        
                        @foreach($chapter_moinhat as $chap)
                        <li class="vip-0"><a href="{{URL('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a>
                        </li>
                        @endforeach
                       
                        
                    </ul> 
                </div>
                <div class="card-box" id="chapters">
                
                    <br>
                    <header><h3><i class="fa-list-bullet"></i> {{$truyen->tentruyen}}</h3></header>
                    <ul class="chapters v1">
                        @php
                        $mucluc = count($chapter);
                        @endphp
                        @if($mucluc>0)
                        @foreach($chapter as $chap)
                        <li class="vip-0"><a href="{{URL('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a>
                        </li>
                        @endforeach
                        @else
                        <li class="vip-0">Đang cập nhật...</li>
                        @endif
                    </ul> 
                    <div class="pagination-control"><ul class="pagination"><li class="active"><a href="#" rel="nofollow">1</a></li><li><a href="">2</a></li>
                    	<li><a href="">3</a></li>
                    	<li><a href="">4</a></li>
                    	<li class="dot"><span>...</span></li><li><a href="">28</a></li>
                    

                    	<li><a href="" title="Trang sau"><i class="fa-angle-right"></i></a></li></ul></div><div class="goto"><label>Đi đến trang </label><input type="text" value=""><button type="button" id="goto-page" data-total="28">Đi</button></div> 
                    	<!-- facebook comment-->
                    		 <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
                    </div> 


                    	<div class="card-box" id="comments"> <header><h4><i class="fa-chat"></i> Nhận xét của độc giả về truyện Chào Buổi Sáng Tổng Thống Đại Nhân</h4></header>

                    	 <form class="comment-form" method="post"> <input type="hidden" name="storyID" id="storyID" value="16815"> <input type="hidden" name="replyTo" value="0"> <textarea aria-label="Bình luận" id="comment-message" name="message" placeholder="Nội dung bình luận tối thiểu 15 ký tự, tối đa 500 ký tự!"></textarea> <p id="comment-char-count">Số ký tự: <span>0</span></p> <div class="text-right"><button type="submit"><i class="fa-paper-plane"></i> Gửi</button></div> </form> <ul id="comment-list" class="comment-list"><li id="comment112564" class="comment clearfix " data-user-id="442265" data-parent="0" data-id="112564" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">kh</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/442265" itemprop="url">lê khắc hồng</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">25/7/2021</time></div>
                                        <p class="message" itemprop="commentText">đã đăng nhập và đăng ký xong vẫn không đọc được là sao </p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="112564"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="112564"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment112657" class="comment clearfix subComment admin" data-user-id="125409" data-parent="112564" data-id="112657" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">D</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/125409" itemprop="url">Diode</a></span></p><p class="labels"><span class="label-admin">Admin</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">26/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Bạn nạp linh thạch là đọc được nha, ib zalo 0362.241.056 để mình hỗ trợ nha
</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="112657"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="112657"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment112563" class="comment clearfix " data-user-id="442265" data-parent="0" data-id="112563" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">kh</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/442265" itemprop="url">lê khắc hồng</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">25/7/2021</time></div>
                                        <p class="message" itemprop="commentText">đã đăng nhập và đăng ký xong vẫn không đọc được là sao </p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="112563"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="112563"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment112562" class="comment clearfix " data-user-id="442265" data-parent="0" data-id="112562" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">kh</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/442265" itemprop="url">lê khắc hồng</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">25/7/2021</time></div>
                                        <p class="message" itemprop="commentText">đã đăng nhập và đăng ký xong vẫn không đọc được là sao </p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="112562"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="112562"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment112561" class="comment clearfix " data-user-id="442265" data-parent="0" data-id="112561" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">kh</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/442265" itemprop="url">lê khắc hồng</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">25/7/2021</time></div>
                                        <p class="message" itemprop="commentText">đã đăng nhập và đăng ký xong vẫn không đọc được là sao </p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="112561"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="112561"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment111376" class="comment clearfix " data-user-id="457136" data-parent="0" data-id="111376" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">lt</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/457136" itemprop="url">lợi tấn</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">19/7/2021</time></div>
                                        <p class="message" itemprop="commentText">As bs cs hs js ks ls os ps</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="111376"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="111376"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment109874" class="comment clearfix vip" data-user-id="452112" data-parent="0" data-id="109874" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">PT</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/452112" itemprop="url">Phạm Tuấn</a></span></p><p class="labels"><span class="label-vip">Mạnh thường quân</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">14/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Đã nạp thẻ sao k đc vậy adm</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="109874"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="109874"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment109898" class="comment clearfix subComment admin" data-user-id="125409" data-parent="109874" data-id="109898" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">D</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/125409" itemprop="url">Diode</a></span></p><p class="labels"><span class="label-admin">Admin</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">14/7/2021</time></div>
                                        <p class="message" itemprop="commentText">bạn nhấn vào chương truyện rồi nhấn để xem là đọc được nha. Cần hỗ trợ thêm bạn ib zalo 0362.241.056</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="109898"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="109898"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment109873" class="comment clearfix vip" data-user-id="452112" data-parent="0" data-id="109873" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">PT</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/452112" itemprop="url">Phạm Tuấn</a></span></p><p class="labels"><span class="label-vip">Mạnh thường quân</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">14/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Đã nạp thẻ sao k đc vậy adm</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="109873"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="109873"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment109872" class="comment clearfix vip" data-user-id="452112" data-parent="0" data-id="109872" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">PT</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/452112" itemprop="url">Phạm Tuấn</a></span></p><p class="labels"><span class="label-vip">Mạnh thường quân</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">14/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Đã nạp thẻ sao k đc vậy adm</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="109872"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="109872"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment107982" class="comment clearfix " data-user-id="439785" data-parent="0" data-id="107982" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">XH</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/439785" itemprop="url">Xuân Hoa</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">29/6/2021</time></div>
                                        <p class="message" itemprop="commentText">Nạp thể như nào, bao nhiêu thì có thể đọc hết truyện vậy ad</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="107982"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="107982"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment108206" class="comment clearfix subComment admin" data-user-id="125409" data-parent="107982" data-id="108206" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">D</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/125409" itemprop="url">Diode</a></span></p><p class="labels"><span class="label-admin">Admin</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">1/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Bạn nạp qua bank 150k là đọc full nha., ib zalo 0362.241.056 để mình hỗ trợ nha</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="108206"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="108206"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment108612" class="comment clearfix subComment " data-user-id="444453" data-parent="107982" data-id="108612" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">NN</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/444453" itemprop="url">Nguyen Nhân</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">4/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Nap bank la nap the nao v ạ </p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="108612"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="108612"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment109020" class="comment clearfix subComment " data-user-id="446782" data-parent="107982" data-id="109020" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">V</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/446782" itemprop="url">Vân</a></span></p><p class="labels"></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">7/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Đã ai nạp để đọc full chưa chỉ mình với
</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="109020"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="109020"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment107183" class="comment clearfix vip" data-user-id="389679" data-parent="0" data-id="107183" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">LJ</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/389679" itemprop="url">Lisa Jon</a></span></p><p class="labels"><span class="label-vip">Mạnh thường quân</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">22/6/2021</time></div>
                                        <p class="message" itemprop="commentText">3000 linh thạch là bao nhiêu tiền ạ</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="107183"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="107183"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li><li id="comment108198" class="comment clearfix subComment vip" data-user-id="433234" data-parent="107183" data-id="108198" itemscope="" itemtype="http://schema.org/UserComments">
<span class="avatar-letter">A</span><div class="comment-content"><div class="userinfo"><p itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><span itemprop="name"><a href="https://dtruyen.com/profile/433234" itemprop="url">A.alex</a></span></p><p class="labels"><span class="label-vip">Mạnh thường quân</span></p> <i class="fa fa-circle"></i> <time itemprop="commentTime">1/7/2021</time></div>
                                        <p class="message" itemprop="commentText">Hơn 200k á bạn</p> </div>
                                    <div class="acts">
                                        <a href="#" rel="nofollow" class="action-reply-comment" title="Trả lời" data-type="story" data-object="16815" data-id="108198"><i class="fa fa-reply"></i> Trả lời</a><a href="#" rel="nofollow" class="action-love-comment" data-id="108198"><i class="fa fa-thumbs-o-up"></i> Thích <span class="likeCount">. 0</span></a></div>
                                </li>
                            </ul>
                             <div id="comment-more">
                             	<a href="#" data-paged="2" rel="nofollow"><i class="fa-angle-down"></i> Xem thêm
                             	</a>
                             </div> 
                         </div> 
                     </div> 
                     

                      </div> 
                      <aside class="right-sidebar"><div id="reading-stories"><div id="story-his-16815"><i class="fa-history"></i><a href="https://dtruyen.com/chao-buoi-sang-tong-thong-dai-nhan/ha-tinh-than-mang-thai_1264561.html" rel="nofollow" class="title"><h5>Chào Buổi Sáng Tổng Thống Đại Nhân</h5><em>Đang đọc C1</em><span>FULL</span></a><button data-id="16815">×</button></div></div> <section class="card-box"> <header><a href="https://dtruyen.com/truyen-ngon-tinh-hay/" title="Truyện Ngôn Tình Hay">Truyện Ngôn Tình Hay <i class="fa fa-angle-right"></i></a></header> <div class="top-stories"> <ul> <li class="story-top" data-id="15777" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/phe-sai-muon-nghich-thien-ma-de-cuong-phi/" itemprop="url" title="Phế Sài Muốn Nghịch Thiên: Ma Đế Cuồng Phi">Phế Sài Muốn Nghịch Thiên: Ma Đế Cuồng Phi</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 29,110,807</p></li><li class="story-top" data-id="18851" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/tong-tai-hoi-vo-banh-bao-lam-mai-daddy-tong-tai/" itemprop="url" title="Tổng Tài Hỏi Vợ: Bánh Bao Làm Mai (Daddy Tổng Tài)">Tổng Tài Hỏi Vợ: Bánh Bao Làm Mai (Daddy Tổng Tài)</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 917,930</p></li><li class="story-top" data-id="9070" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/me-17-tuoi-con-trai-thien-tai-cha-phuc-hac/" itemprop="url" title="Mẹ 17 Tuổi: Con Trai Thiên Tài Cha Phúc Hắc">Mẹ 17 Tuổi: Con Trai Thiên Tài Cha Phúc Hắc</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 25,156,019</p></li><li class="story-top" data-id="5971" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/nguoi-tinh-nho-ben-canh-tong-giam-doc-wt1/" itemprop="url" title="Người Tình Nhỏ Bên Cạnh Tổng Giám Đốc">Người Tình Nhỏ Bên Cạnh Tổng Giám Đốc</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 18,828,920</p></li><li class="story-top" data-id="17943" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/quy-de-cuong-the-dai-tieu-thu-an-choi-trac-tang/" itemprop="url" title="Quỷ Đế Cuồng Thê: Đại Tiểu Thư Ăn Chơi Trác Táng">Quỷ Đế Cuồng Thê: Đại Tiểu Thư Ăn Chơi Trác Táng</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 20,903,149</p></li><li class="story-top" data-id="16003" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/co-vo-ngot-ngao-co-chut-bat-luong/" itemprop="url" title="Cô Vợ Ngọt Ngào Có Chút Bất Lương ">Cô Vợ Ngọt Ngào Có Chút Bất Lương </a></h3> <p class="viewed"><i class="fa fa-eye"></i> 33,978,628</p></li><li class="story-top" data-id="831" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/tro-choi-nguy-hiem-tong-tai-toi-ac-tay-troi/" itemprop="url" title="Trò Chơi Nguy Hiểm Tổng Tài Tội Ác Tày Trời">Trò Chơi Nguy Hiểm Tổng Tài Tội Ác Tày Trời</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 10,898,653</p></li><li class="story-top" data-id="15102" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/thu-phi-thien-ha-than-y-dai-tieu-thu/" itemprop="url" title="Thú Phi Thiên Hạ: Thần Y Đại Tiểu Thư">Thú Phi Thiên Hạ: Thần Y Đại Tiểu Thư</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 10,417,117</p></li><li class="story-top" data-id="811" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/bay-ngay-an-ai/" itemprop="url" title="Bảy Ngày Ân Ái">Bảy Ngày Ân Ái</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 13,870,314</p></li><li class="story-top" data-id="15148" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name">
                                	<a href="https://dtruyen.com/co-vo-hop-dong-bo-tron-cua-tong-giam-doc/" itemprop="url" title="Cô Vợ Hợp Đồng Bỏ Trốn Của Tổng Giám Đốc">Cô Vợ Hợp Đồng Bỏ Trốn Của Tổng Giám Đốc</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 8,981,201</p></li> </ul> </div> <footer> <a class="show-more-btn" rel="nofollow" title="Truyện Ngôn Tình Hay" href="https://dtruyen.com/truyen-ngon-tinh-hay/">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> </section> <section class="card-box"> <header><a href="https://dtruyen.com/review/" title="Review Truyện">Review Truyện <i class="fa fa-angle-right"></i></a></header> <ul class="review-list"> <li class="news-item clearfix"> <a href="https://dtruyen.com/review/top-10-truyen-ngon-tinh-sung-hay-nhat/" class="thumb" title="Top 10 truyện ngôn tình sủng hay nhất mọi thời đại" rel="nofollow"><img src="https://img.dtruyen.com/public/images/news/top10truyenngontinhsunghaynhat4ekIk.jpg" data-layzr="https://img.dtruyen.com/public/images/news/top10truyenngontinhsunghaynhat4ekIk.jpg" width="60" height="42" alt="Top 10 truyện ngôn tình sủng hay nhất mọi thời đại"></a> <h4 class="title"><a href="https://dtruyen.com/review/top-10-truyen-ngon-tinh-sung-hay-nhat/" title="Top 10 truyện ngôn tình sủng hay nhất mọi thời đại">Top 10 truyện ngôn tình sủng hay nhất mọi thời đại</a></h4></li><li class="news-item clearfix"> <a href="https://dtruyen.com/review/top-10-truyen-ngon-tinh-co-dai-hay-nhat/" class="thumb" title="Top 10 truyện ngôn tình cổ đại hay nhất 6 tháng đầu 2021" rel="nofollow"><img src="https://img.dtruyen.com/public/images/news/top10truyenngontinhcodaihaynhate1TqV.jpg" data-layzr="https://img.dtruyen.com/public/images/news/top10truyenngontinhcodaihaynhate1TqV.jpg" width="60" height="42" alt="Top 10 truyện ngôn tình cổ đại hay nhất 6 tháng đầu 2021"></a> <h4 class="title"><a href="https://dtruyen.com/review/top-10-truyen-ngon-tinh-co-dai-hay-nhat/" title="Top 10 truyện ngôn tình cổ đại hay nhất 6 tháng đầu 2021">Top 10 truyện ngôn tình cổ đại hay nhất 6 tháng đầu 2021</a></h4></li><li class="news-item clearfix"> <a href="https://dtruyen.com/review/top-10-truyen-vong-du-hay-nhat/" class="thumb" title="Top 10 truyện võng du hay nhất năm 2021" rel="nofollow"><img src="https://img.dtruyen.com/public/images/news/top10truyenvongduhaynhatey6yF.jpg" data-layzr="https://img.dtruyen.com/public/images/news/top10truyenvongduhaynhatey6yF.jpg" width="60" height="42" alt="Top 10 truyện võng du hay nhất năm 2021"></a> <h4 class="title"><a href="https://dtruyen.com/review/top-10-truyen-vong-du-hay-nhat/" title="Top 10 truyện võng du hay nhất năm 2021">Top 10 truyện võng du hay nhất năm 2021</a></h4></li><li class="news-item clearfix"> <a href="https://dtruyen.com/review/top-10-truyen-he-thong-hay-nhat/" class="thumb" title="Top 10 truyện hệ thống hay nhất dành riêng cho fan 2021" rel="nofollow"><img src="https://img.dtruyen.com/public/images/news/top10truyenhethonghaynhatlnMKs.jpg" data-layzr="https://img.dtruyen.com/public/images/news/top10truyenhethonghaynhatlnMKs.jpg" width="60" height="42" alt="Top 10 truyện hệ thống hay nhất dành riêng cho fan 2021"></a> <h4 class="title"><a href="https://dtruyen.com/review/top-10-truyen-he-thong-hay-nhat/" title="Top 10 truyện hệ thống hay nhất dành riêng cho fan 2021">Top 10 truyện hệ thống hay nhất dành riêng cho fan 2021</a></h4></li><li class="news-item clearfix"> <a href="https://dtruyen.com/review/tong-hop-review-5-truyen-trong-sinh/" class="thumb" title="Tổng hợp review 5 truyện trọng sinh đáng đọc nhất của “mọt” ngôn tình" rel="nofollow"><img src="https://img.dtruyen.com/public/images/news/tonghopreview5truyentrongsinhvylbs.jpg" data-layzr="https://img.dtruyen.com/public/images/news/tonghopreview5truyentrongsinhvylbs.jpg" width="60" height="42" alt="Tổng hợp review 5 truyện trọng sinh đáng đọc nhất của “mọt” ngôn tình"></a> <h4 class="title"><a href="https://dtruyen.com/review/tong-hop-review-5-truyen-trong-sinh/" title="Tổng hợp review 5 truyện trọng sinh đáng đọc nhất của “mọt” ngôn tình">Tổng hợp review 5 truyện trọng sinh đáng đọc nhất của “mọt” ngôn tình</a></h4></li> </ul> <footer> <a class="show-more-btn" rel="nofollow" title="Truyện Full" href="https://dtruyen.com/review/">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> </section> <section class="card-box"> <header><a href="https://dtruyen.com/truyen-ngon-tinh-moi/" title="Truyện Ngôn Tình Mới">Truyện Ngôn Tình Mới <i class="fa fa-angle-right"></i></a></header> <div class="top-stories"> <ul> <li class="story-top" data-id="28407" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/benh-ten-la-yeu/" itemprop="url" title="Bệnh Tên Là Yêu">Bệnh Tên Là Yêu</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 150</p></li><li class="story-top" data-id="28405" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/hon-nong-nhiet-hoa-hong-nho/" itemprop="url" title="Hôn Nồng Nhiệt Hoa Hồng Nhỏ">Hôn Nồng Nhiệt Hoa Hồng Nhỏ</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 100</p></li><li class="story-top" data-id="28403" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/canh-xuan-chot-tiet/" itemprop="url" title="Cảnh Xuân Chợt Tiết">Cảnh Xuân Chợt Tiết</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 250</p></li><li class="story-top" data-id="28378" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/quyen-than-chuong-tam-kieu/" itemprop="url" title="Quyền Thần Chưởng Tâm Kiều">Quyền Thần Chưởng Tâm Kiều</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 12,200</p></li><li class="story-top" data-id="28367" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/thai-tu-phi-co-benh/" itemprop="url" title="Thái Tử Phi Có Bệnh">Thái Tử Phi Có Bệnh</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 850</p></li><li class="story-top" data-id="28364" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/cuc-pham-dai-thieu/" itemprop="url" title="Cực Phẩm Đại Thiếu">Cực Phẩm Đại Thiếu</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 50</p></li><li class="story-top" data-id="28344" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/nguoi-vo-cam-cua-tong-tai-ac-ma/" itemprop="url" title="Người Vợ Câm Của Tổng Tài Ác Ma">Người Vợ Câm Của Tổng Tài Ác Ma</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 1,250</p></li><li class="story-top" data-id="28342" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/chang-re-sieu-cap-cua-nu-than/" itemprop="url" title="Chàng Rể Siêu Cấp Của Nữ Thần">Chàng Rể Siêu Cấp Của Nữ Thần</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 1,150</p></li><li class="story-top" data-id="28336" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/chuyen-tinh-hu-nu-va-soi/" itemprop="url" title="Chuyện Tình Hủ Nữ Và Sói">Chuyện Tình Hủ Nữ Và Sói</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 50</p></li><li class="story-top" data-id="28335" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/co-vo-nuoi-tu-be-dai-thuc-xin-dung-voi/" itemprop="url" title="Cô Vợ Nuôi Từ Bé: Đại Thúc Xin Đừng Vội">Cô Vợ Nuôi Từ Bé: Đại Thúc Xin Đừng Vội</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 2,700</p></li> </ul> </div> <footer> <a class="show-more-btn" rel="nofollow" title="Truyện Ngôn Tình Mới" href="https://dtruyen.com/truyen-ngon-tinh-moi/">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> </section> <section class="card-box"> <header><a href="https://dtruyen.com/truyen-ngon-tinh-full/" title="Truyện Ngôn Tình FULL">Truyện Ngôn Tình FULL <i class="fa fa-angle-right"></i></a></header> <div class="top-stories"> <ul> <li class="story-top" data-id="15777" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/phe-sai-muon-nghich-thien-ma-de-cuong-phi/" itemprop="url" title="Phế Sài Muốn Nghịch Thiên: Ma Đế Cuồng Phi">Phế Sài Muốn Nghịch Thiên: Ma Đế Cuồng Phi</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 29,110,807</p></li><li class="story-top" data-id="26423" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/phu-quan-that-tuyet-sac/" itemprop="url" title="Phu Quân Thật Tuyệt Sắc">Phu Quân Thật Tuyệt Sắc</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 90,450</p></li><li class="story-top" data-id="23837" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/me-vo-khong-loi-ve-wt3/" itemprop="url" title="Mê Vợ Không Lối Về">Mê Vợ Không Lối Về</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 4,148,350</p></li><li class="story-top" data-id="19927" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/giai-nhan-va-luat-su/" itemprop="url" title="Giai Nhân Và Luật Sư">Giai Nhân Và Luật Sư</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 558,300</p></li><li class="story-top" data-id="19882" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/he-thong-sac-nu/" itemprop="url" title="[Hệ Thống] : Sắc Nữ">[Hệ Thống] : Sắc Nữ</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 11,021,300</p></li><li class="story-top" data-id="25449" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/chong-ma-cua-em/" itemprop="url" title="Chồng Ma Của Em">Chồng Ma Của Em</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 313,850</p></li><li class="story-top" data-id="21163" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/ong-xa-than-bi/" itemprop="url" title="Ông Xã Thần Bí">Ông Xã Thần Bí</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 907,600</p></li><li class="story-top" data-id="1806" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/anh-se-phai-yeu-em/" itemprop="url" title="Anh Sẽ Phải Yêu Em">Anh Sẽ Phải Yêu Em</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 590,165</p></li><li class="story-top" data-id="22735" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/ca-the-gioi-cua-anh-chi-danh-cho-em/" itemprop="url" title="Cả Thế Giới Của Anh Chỉ Dành Cho Em">Cả Thế Giới Của Anh Chỉ Dành Cho Em</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 509,400</p></li><li class="story-top" data-id="9070" itemscope="" itemtype="https://schema.org/Book"><meta itemprop="bookFormat" content="EBook"> <h3 class="title" itemprop="name"><a href="https://dtruyen.com/me-17-tuoi-con-trai-thien-tai-cha-phuc-hac/" itemprop="url" title="Mẹ 17 Tuổi: Con Trai Thiên Tài Cha Phúc Hắc">Mẹ 17 Tuổi: Con Trai Thiên Tài Cha Phúc Hắc</a></h3> <p class="viewed"><i class="fa fa-eye"></i> 25,156,019</p></li> </ul> </div> <footer> <a class="show-more-btn" rel="nofollow" title="Truyện Ngôn Tình FULL" href="https://dtruyen.com/truyen-ngon-tinh-full/">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> </section> <section class="card-box"> <header>Thể loại truyện</header> <div class="categories clearfix"> <a href="https://dtruyen.com/tien-hiep/" title="Tiên hiệp">Tiên hiệp</a><a href="https://dtruyen.com/kiem-hiep/" title="Kiếm hiệp">Kiếm hiệp</a><a href="https://dtruyen.com/truyen-teen/" title="Truyện Teen">Truyện Teen</a><a href="https://dtruyen.com/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a><a href="https://dtruyen.com/doan-van/" title="Đoản Văn">Đoản Văn</a><a href="https://dtruyen.com/dong-phuong/" title="Đông Phương">Đông Phương</a><a href="https://dtruyen.com/gia-dau/" title="Gia Đấu">Gia Đấu</a><a href="https://dtruyen.com/nu-cuong/" title="Nữ Cường">Nữ Cường</a><a href="https://dtruyen.com/cung-dau/" title="Cung Đấu">Cung Đấu</a><a href="https://dtruyen.com/truyen-sung/" title="Truyện Sủng">Truyện Sủng</a><a href="https://dtruyen.com/truyen-nguoc/" title="Truyện Ngược">Truyện Ngược</a><a href="https://dtruyen.com/linh-di/" title="Linh Dị">Linh Dị</a><a href="https://dtruyen.com/tham-hiem/" title="Thám Hiểm">Thám Hiểm</a><a href="https://dtruyen.com/bach-hop/" title="Bách Hợp">Bách Hợp</a><a href="https://dtruyen.com/hai-huoc/" title="Hài Hước">Hài Hước</a><a href="https://dtruyen.com/hien-dai/" title="Hiện Đại">Hiện Đại</a><a href="https://dtruyen.com/viet-nam/" title="Việt Nam">Việt Nam</a><a href="https://dtruyen.com/light-novel/" title="Light Novel">Light Novel</a><a href="https://dtruyen.com/nu-phu/" title="Nữ Phụ">Nữ Phụ</a><a href="https://dtruyen.com/phuong-tay/" title="Phương Tây">Phương Tây</a><a href="https://dtruyen.com/mat-the/" title="Mạt Thế">Mạt Thế</a><a href="https://dtruyen.com/co-dai/" title="Cổ Đại">Cổ Đại</a><a href="https://dtruyen.com/dien-van/" title="Điền Văn">Điền Văn</a><a href="https://dtruyen.com/dong-nhan/" title="Đồng Nhân">Đồng Nhân</a><a href="https://dtruyen.com/trong-sinh/" title="Trọng Sinh">Trọng Sinh</a><a href="https://dtruyen.com/di-nang/" title="Dị Năng">Dị Năng</a><a href="https://dtruyen.com/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a><a href="https://dtruyen.com/di-gioi/" title="Dị Giới">Dị Giới</a><a href="https://dtruyen.com/vong-du/" title="Võng Du">Võng Du</a><a href="https://dtruyen.com/quan-su/" title="Quân sự">Quân sự</a><a href="https://dtruyen.com/khoa-hoc/" title="Khoa học">Khoa học</a><a href="https://dtruyen.com/lich-su/" title="Lịch sử">Lịch sử</a><a href="https://dtruyen.com/truyen-khac/" title="Truyện Khác">Truyện Khác</a><a href="https://dtruyen.com/do-thi/" title="Đô thị">Đô thị</a><a href="https://dtruyen.com/khoa-huyen/" title="Khoa Huyễn">Khoa Huyễn</a><a href="https://dtruyen.com/xuyen-khong/" title="Xuyên Không">Xuyên Không</a><a href="https://dtruyen.com/truyen-ma/" title="Truyện ma">Truyện ma</a><a href="https://dtruyen.com/xuyen-nhanh/" title="Xuyên Nhanh">Xuyên Nhanh</a><a href="https://dtruyen.com/quan-truong/" title="Quan Trường">Quan Trường</a><a href="https://dtruyen.com/dam-my/" title="Đam Mỹ">Đam Mỹ</a><a href="https://dtruyen.com/he-thong/" title="Hệ thống">Hệ thống</a><a href="https://dtruyen.com/tieu-thuyet/" title="Tiểu thuyết">Tiểu thuyết</a><a href="https://dtruyen.com/truyen-cuoi/" title="Truyện Cười">Truyện Cười</a><a href="https://dtruyen.com/truyen-ngan/" title="Truyện Ngắn">Truyện Ngắn</a><a href="https://dtruyen.com/truyen-trinh-tham/" title="Truyện trinh thám">Truyện trinh thám</a><a href="https://dtruyen.com/truyen-sac/" title="Truyện Sắc">Truyện Sắc</a> </div> </section></aside></div><script>editorids = [2];
storytype = 2;storyname='Chào Buổi Sáng Tổng Thống Đại Nhân';
storyData = {name:'Chào Buổi Sáng Tổng Thống Đại Nhân',donate:0,type:2,state:'end',schedule:'',authors:null};</script>
<script src="https://img.dtruyen.com/desktop/js/main.js?v=0.1.9"></script>
<script src="https://img.dtruyen.com/desktop/js/story.js?v=1.1.4"></script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCG6LV5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script src="https://img.dtruyen.com/desktop/js/main_events.js"></script>
<script src="https://connect.facebook.net/vi_VN/sdk.js"></script>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
</div>

@endsection