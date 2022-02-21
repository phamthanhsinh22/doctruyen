@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Account
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                                <form role="form" action="{{route('account.update',$data->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{$data->email}}" name="email" class="form-control" placeholder="Email">
                                </div>
                                
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" value="{{$data->password}}" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                </div>
                              
                                <div class="form-group">
                                <label for="exampleInputEmail1">Quyen</label>
                                <br>
                                <select name="quyen" class="custom-select">
                                    @if($data -> quyen==1)
                                    <option selected value="1">Admin</option>
                                    <option value="0">User</option>
                                    @else
                                    <option selected value="0">User</option>
                                    <option value="1">Admin</option>
                                    @endif
                                </select>
                                </div>
                                
                                <button type="submit"  class="btn btn-info">Update</button>
                            </form>
                            
                            </div>

                        </div>
                    </section>

            </div>

            </div>
        </div>
@endsection