<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="{{url('css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
      
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script>
    $(document).ready(function() {
        $('#table12').DataTable();
    });
    </script>

    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset('images/2.png')}}">
                 @if(!Auth::check())
                <div class="dropdown-user-details-name"><a href="dangnhap">????ng Nh???p</div>
                @else
                <b class="caret"></b>
                <span class="username">Hello {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }} </span>
                @endif
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL('dangnhap')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL('admin')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Account</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('account.create')}}">Th??m Account</a></li>
                        <li><a href="{{route('account.index')}}">Li???t K?? Account</a></li>
                        
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh M???c</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('danhmuc.create')}}">Th??m Danh M???c</a></li>
                        <li><a href="{{route('danhmuc.index')}}">Li???t K?? Danh M???c</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Truy???n S??ch</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('truyen.create')}}">Th??m S??ch</a></li>
                        <li><a href="{{route('truyen.index')}}">Li???t K?? S??ch</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Chapter</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('chapter.create')}}">Th??m Chapter</a></li>
                        <li><a href="{{route('chapter.index')}}">Li???t K?? Chapter</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Th??? lo???i</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('theloai.create')}}">Th??m Th??? lo???i</a></li>
                        <li><a href="{{route('theloai.index')}}">Li???t K?? Th??? lo???i</a></li>
                        
                    </ul>
                </li>
            </ul>            
          </div>
        <!-- sidebar menu end-->
    </div>

</aside>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    @yield('admin_content')

  </section>
 <!-- footer -->
      <div class="footer">
      <div class="wthree-copyright">
        <p>?? 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
      </div>
      </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
  $(document).ready(function() {
    //BOX BUTTON SHOW AND CLOSE
     jQuery('.small-graph-box').hover(function() {
      jQuery(this).find('.box-button').fadeIn('fast');
     }, function() {
      jQuery(this).find('.box-button').fadeOut('fast');
     });
     jQuery('.small-graph-box .box-close').click(function() {
      jQuery(this).closest('.small-graph-box').fadeOut(200);
      return false;
     });
     
      //CHARTS
      function gd(year, day, month) {
      return new Date(year, month - 1, day).getTime();
    }
    
    graphArea2 = Morris.Area({
      element: 'hero-area',
      padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
      data: [
        {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
        {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
        {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
        {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
        {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
        {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
        {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
        {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
        {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
      
      ],
      lineColors:['#eb6f6f','#926383','#eb6f6f'],
      xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
      pointSize: 2,
      hideHover: 'auto',
      resize: true
    });
    
     
  });
  </script>
<!-- calendar -->
  <script type="text/javascript" src="js/monthly.js"></script>
  <script type="text/javascript">
    $(window).load( function() {

      $('#mycalendar').monthly({
        mode: 'event',
        
      });

      $('#mycalendar2').monthly({
        mode: 'picker',
        target: '#mytarget',
        setWidth: '250px',
        startHidden: true,
        showTrigger: '#mytarget',
        stylePast: true,
        disablePast: true
      });

    switch(window.location.protocol) {
    case 'http:':
    case 'https:':
    // running on a server, should be good.
    break;
    case 'file:':
    alert('Just a heads-up, events will not work when run locally.');
    }

    });
  </script>
  <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('noidung_chapter');
    </script>
  <!-- //calendar -->
  <script type="text/javascript">
    function ChangeToSlug()
{
    var slug;
 
    //L???y text t??? th??? input title 
   // title = document.getElementById("title").value;
    slug = document.getElementById("slug").value;
    //?????i ch??? hoa th??nh ch??? th?????ng
    slug = slug.toLowerCase();
  //  ?????i k?? t??? c?? d???u th??nh kh??ng d???u
    slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
    slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
    slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
    slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
    slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
    slug = slug.replace(/??|???|???|???|???/gi, 'y');
    slug = slug.replace(/??/gi, 'd');
    //X??a c??c k?? t??? ?????t bi???t
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
    slug = slug.replace(/ /gi, "-");
    //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
    //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox c?? id ???slug???
    document.getElementById('convert_slug').value = slug;
}
</script>
</body>
</html>