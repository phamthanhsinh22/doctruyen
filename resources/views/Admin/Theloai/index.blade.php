@extends('Admin.Layout.index')
@section('admin_content')
@if(Session::has('message'))
<h3>{{Session::get('message')}}</h3>
@endif
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Thể loại
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
            <th>Tên Thể loại</th>
            <th>Slug Thể loại</th>
            <th>Từ khóa</th>
            <th>Mô Tả</th>
            <th>Kích hoạt</th>
            <th style="width:30px;"></th>
          </tr>
       <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
            @foreach($theloai as $theloai1)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$theloai1->id}}</span></td>
            <td><span class="text-ellipsis">{{$theloai1->tentheloai}}</span></td>
            <td><span class="text-ellipsis">{{$theloai1->slug_theloai}}</span></td>
            <td><span class="text-ellipsis">{{$theloai1->tukhoa}}</span></td>
            <td><span class="text-ellipsis">{{$theloai1->mota}}</span></td>
            <td>
              @if($theloai1 -> kichhoat==1)
                <span class="text text-success">Kích hoạt</span>
              @else
                <span class="text text-danger">Không kích hoạt</span>
              @endif
            </td>
            <td>
            <button>  <a href="{{route('theloai.edit',$theloai1->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a></button>
              
                
              <form action="{{route('theloai.destroy',$theloai1->id)}}" method="post">
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