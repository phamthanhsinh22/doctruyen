@extends('layout/master')
@section('content')

	<img src="https://img.dtruyen.com/change-domain-pc.png" width="728" height="50" alt="change-domain" style="width:728px;display:block;margin: 10px auto;">
  <div class="container">
    <div class="main-col">
      
       <section class="card-box"> <header><a href="">TRUYỆN MỚI CẬP NHẬT <i class="fa fa-angle-right"></i></a></header> 
      <div class="grid-stories">
        @foreach($truyen as $value)
        <div class="story-grid">
          <a href="{{URL('xem-truyen/'.$value->slug_truyen)}}" class="thumb"> <img src="{{asset('/uploads/truyen/'.$value->hinhanh)}}"class="cover" width="164" height="211"> <label class="label label-type-2"></label>
          </a>
          <div class="info">
            <h3 class="title" ><a href="{{URL('xem-truyen/'.$value->slug_truyen)}}">{{$value->tentruyen}}</a></h3>
      <p class="last-chapter">{{strlen($value->tomtat) > 30 ? mb_substr($value->tomtat,0,50).'....' : $value->tomtat }}</p></div>
      <span class="label-status-ongoing"></span><span class="label-hot-0"></span>
        </div>
        @endforeach
      </div>
       <footer> <a class="show-more-btn" href="{{URL('xem-truyen')}}">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer>
     </section>
       
    </div>
    <aside class="right-sidebar"> <section class="card-box"> 
      <header>Thể loại truyện</header>
      <div class="categories clearfix"> 
        @foreach($danhmuc as $danh)
        <a href="">{{$danh->tendanhmuc}}</a>
        @endforeach
      </div>
    </section>
    <section class="card-box"> <header><a href="{{URL('truyennoibat')}}">Truyện Nổi Bật <i class="fa fa-angle-right"></i></a></header> 
      <ul class="review-list"> 
        @foreach($truyen_noibat as $truyennb) 
        <li class="news-item clearfix">
       
          <a href="" class="thumb">
          
          <img src="{{asset('uploads/truyen/'.$truyennb->hinhanh)}}" width="60" height="42"></a> 
          <h4 class="title">
          <a href="{{URL('xem-truyen/'.$truyennb->slug_truyen)}}">{{$truyennb->tentruyen}}</a></h4>
          
        </li>
        @endforeach
    </ul>
    <footer> <a class="show-more-btn" href="{{URL('xem-truyen')}}">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> 
  </section> 
  <section class="card-box">
    <header><a href="https://dtruyen.com/truyen-duoc-xem-nhieu-nhat/">Top Truyện Hay <i class="fa fa-angle-right"></i></a></header> <div class="top-stories"> <ul> <li class="story-top">
      <h3 class="title"><a href="https://dtruyen.com/ngao-the-dan-than/">Ngạo Thế Đan Thần</a>
      </h3>
      <p class="viewed"><i class="fa fa-eye"></i> 280,992,152</p>
    </li>
  </ul> </div>
  <footer> <a class="show-more-btn" href="https://dtruyen.com/truyen-duoc-xem-nhieu-nhat/">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> </section>
  <section class="card-box"> <header><a href="https://dtruyen.com/truyen-moi-dang/">Truyện mới đăng <i class="fa fa-angle-right"></i></a></header> <div class="top-stories"> <ul> <li class="story-top">
    <h3 class="title"><a href="https://dtruyen.com/co-vo-anh-hau-sung-chong-ngoc/">Cô Vợ Ảnh Hậu Sủng Chồng Ngốc </a>
    </h3>
    <p class="viewed"><i class="fa fa-eye"></i> 0</p>
  </li>
</ul> </div>
<footer> <a class="show-more-btn" rel="nofollow" title="Truyện mới đăng" href="https://dtruyen.com/truyen-moi-dang/">XEM THÊM <i class="fa fa-angle-down"></i></a> </footer> </section> </aside>
  </div>
 <!-- <script type="text/javascript">
    $('.select-chapter').on('change',function(){
        var url = $(this).val();
        if(url){
          window.location = url;

        }
        return false;
      });

      current_chapter();

      function current_chapter(){
        var url = window.location.href;
        $('.select-chapter').find('option[value="'+url+'"]').attr("selected",true);
      }
    
  </script> -->


@endsection