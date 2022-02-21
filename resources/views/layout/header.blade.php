<header id="main-header"> <div class="container">
		<h1 class="logo"><a href="{{url('trangchu')}}">doc truyen online</a>
		</h1>
		<ul class="main-nav"> <li><a href="#"><i class="fa-tags">
		</i> Danh Mục</a><ul> 
		@foreach($danhmuc as $danh)
		<li>
		<a href="{{URL('danh-muc/'.$danh->slug_danhmuc)}}"><i class="fa fa-tags"></i>{{$danh->tendanhmuc}}</a></li>
		@endforeach
		</ul>
		<li><a href="#"><i class="fa-list-bullet"></i> Thể loại</a><ul> 
			<li>
				@foreach($theloai as $value)
			<a href="{{url('the-loai/'.$value->slug_theloai)}}" class="vip-link"><i class="fa fa-diamond"></i> {{$value->tentheloai}}</a>
			@endforeach
		</li>
		</ul>
		</li> 
		<li style="background:#df1a0c;"><a href=""><i class="fa fa-cloud-upload"></i> Đăng truyện</a></li> 
	</ul> 
	<div id="search_form">
		<form role="search" method="post" action="{{URL('tim-kiem')}}">
			@csrf
			<input type="text" name="keyword" placeholder="Tìm truyện, tác giả...">
		 <button   type="submit"><i class="fa fa-search"></i></button> </form> 
		<div id="search_result"></div> 
	</div> 
		<ul >
                            @if(!Auth::check())
                                <li style="margin-top: 15px;"><a style="color: white;" href="{{URL('dangnhap')}}"><i class="fa fm fa-user-o"></i>Thành Viên</a></li>
                            @else
                            <li class="dropdown">
                                

                                <ul style="margin-top: 15px;" class="dropdown-menu">
                                    <li><a style="color: black;" href="{{URL('logout')}}">Đăng Xuất</a></li>
                                </ul>
                            </li>
                            @endif
        </ul>

</header>