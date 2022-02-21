@extends('Admin.Layout.index')
@section('admin_content')
@if(Session::has('message'))
<h3>{{Session::get('message')}}</h3>
@endif
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Danh Mục
    </div>
    <div class="table-responsive">
      <table id="table12" class="table table-striped b-t b-light">
       
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>ID</th>
            <th>Tên Truyện</th>
            <th>Tác giả</th>
            <th>Slug Truyện</th>
            
            <th>Hình ảnh</th>
            <th>Tóm Tắt</th>
            <th>Danh Mục</th>
            <th>Thể loại</th>
            <th>Kích hoạt</th>
            <th>Kích hoạt</th>
            <th>Nổi bật</th>
            <th style="width:30px;"></th>
          </tr>
       <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
            @foreach($list_truyen as $truyen)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$truyen->id}}</span></td>
            <td><span class="text-ellipsis">{{$truyen->tentruyen}}</span></td>
            <td><span class="text-ellipsis">{{$truyen->tacgia}}</span></td>
            <td><span class="text-ellipsis">{{$truyen->slug_truyen}}</span></td>

           


            <td><span class="text-ellipsis"><img height="250" width="180" src="{{asset('/uploads/truyen/'.$truyen->hinhanh)}}"></span></td>
            <td><span class="text-ellipsis">{{$truyen->tomtat}}</span></td>
             <td>

                            @foreach($truyen->thuocnhieudanhmuctruyen as $thuocdanh)

                             

                              <span class="badge badge-dark">{{$thuocdanh->tendanhmuc}}</span>

                            @endforeach

            </td>

            <td>

                            @foreach($truyen->thuocnhieutheloaitruyen as $thuocloai)

                             

                              <span class="badge badge-dark">{{$thuocloai->tentheloai}}</span>

                            @endforeach

            </td>
           
            <td><span class="text-ellipsis">{{$truyen->kichhoat}}</span></td>
            <td>
              @if($truyen -> kichhoat==1)
                <span class="text text-success">Kích hoạt</span>
              @else
                <span class="text text-danger">Không kích hoạt</span>
              @endif
            </td>

            <td>
              @if($truyen -> truyen_noibat==0)
                <span class="text text-success">Truyện mới</span>
              @elseif($truyen -> truyen_noibat==1)
                <span class="text text-danger">Truyện nổi bật</span>
              @else
              <span class="text text-primary">Truyện xem nhiều</span>
              @endif
            </td>


            <td>
            <button>  <a href="{{route('truyen.edit',$truyen->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a></button>
              
                
              <form action="{{route('truyen.destroy',$truyen->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button onclick="return confirm('Bạn muốn xóa không?');"><i class="fa fa-times text-danger text"></i></button>
              </form>
              
            </td>
          </tr>
            @endforeach
      
      </table>
    </div>
    
  </div>
</div>
@endsection