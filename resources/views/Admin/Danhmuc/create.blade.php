@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Danh Mục
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
                                <form role="form" action="{{route('danhmuc.store')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" onkeyup="ChangeToSlug();" value="{{old('tendanhmuc')}}" name="tendanhmuc" class="form-control" id="slug" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Slug Danh Mục</label>
                                    <input type="text" value="{{old('slug_truyen')}}" id="convert_slug" name="slug_danhmuc" class="form-control" id="exampleInputEmail1" placeholder="Slug danh mục">
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Từ khóa Danh Mục</label>
                                    <input type="text" value="{{old('tukhoa')}}" name="tukhoa" class="form-control" id="exampleInputEmail1" placeholder="Từ khóa danh mục">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Mô Tả Danh Mục</label>
                                    <input type="text" value="{{old('mota')}}" name="mota" class="form-control" id="exampleInputEmail1" placeholder="Mô tả danh mục">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Kích hoạt danh mục</label>
                                <br>
                                <select name="kichhoat" class="custom-select">
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                </select>
                                </div>
                                <button type="submit" name="themdanhmuc"  class="btn btn-info">Add</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>
        </div>
@endsection