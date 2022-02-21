@extends('Admin.Layout.index')
@section('admin_content')
@if(Session::has('status'))
<h3>{{Session::get('status')}}</h3>
@endif 
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Chapter
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
            <th>Tiêu Đề</th>
            <th>Slug Chapter</th>
            <th>Tóm Tắt</th>
            <th>Nội Dung</th>
            <th>Thuộc truyện</th>
            <th>Kích hoạt</th>
            <th style="width:30px;"></th>
          </tr>
       <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
            @foreach($chapter as $chap)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$chap->id}}</span></td>
            <td><span class="text-ellipsis">{{$chap->tieude}}</span></td>
            <td><span class="text-ellipsis">{{$chap->slug_chapter}}</span></td>
            <td><span class="text-ellipsis">{{$chap->tomtat}}</span></td>
            <td><span class="text-ellipsis">{{$chap->noidung}}</span></td>
            <td><span class="text-ellipsis">{{$chap->tentruyen}}</span></td>
            <td><span class="text-ellipsis">{{$chap->kichhoat}}</span></td>
            <td>
              @if($chap -> kichhoat==1)
                <span class="text text-success">Kích hoạt</span>
              @else
                <span class="text text-danger">Không kích hoạt</span>
              @endif
            </td>
            <td>
            <button>  <a href="{{route('chapter.edit',$chap->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a></button>
              
                
              <form action="{{route('chapter.destroy',$chap->id)}}" method="post">
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