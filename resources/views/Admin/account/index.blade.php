@extends('Admin.Layout.index')
@section('admin_content')
@if(Session::has('message'))
<h3>{{Session::get('message')}}</h3>
@endif
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Account
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
            <th>Email</th>
            <th>Password</th>
            <th>Quyền</th>
            
            <th style="width:30px;"></th>
          </tr>
       <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
            @foreach($data as $account)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$account->id}}</span></td>
            <td><span class="text-ellipsis">{{$account->email}}</span></td>
            <td><span class="text-ellipsis">{{$account->password}}</span></td>
            <td><span class="text-ellipsis">{{$account->quyen}}</span></td>
          
            <td>
            <button> <a href="{{route('account.edit',$account->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>Edit</a></button>
              
                
              <form action="{{route('account.destroy',$account->id)}}" method="post">
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