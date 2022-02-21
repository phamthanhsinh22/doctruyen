@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Account
                        </header>
                        <div class="panel-body">
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endif
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            <div class="position-center">
                                <form role="form" action="{{route('account.store')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{old('email')}}" name="email" class="form-control" placeholder="Vui Lòng nhập email">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="Password" value="{{old('password')}}" name="password" class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">
                                </div>
                               
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Quyền</label>
                                    <select name="quyen" value="{{old('quyen')}}" class="form-control">

                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                                
                                
                                <button type="submit"  class="btn btn-info">Add</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>
        </div>
@endsection