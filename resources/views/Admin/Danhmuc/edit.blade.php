@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Danh mục
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                                <form role="form" action="{{route('danhmuc.update',$danhmuc->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" onkeyup="ChangeToSlug();" value="{{$danhmuc->tendanhmuc}}" name="tendanhmuc" class="form-control" id="slug" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Slug Danh Mục</label>
                                    <input type="text" value="{{$danhmuc->slug_danhmuc}}" name="slug_danhmuc" id="convert_slug" class="form-control" id="exampleInputEmail1" placeholder="Slug danh mục">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Từ khóa Danh Mục</label>
                                    <input type="text" value="{{$danhmuc->tukhoa}}" name="tukhoa" class="form-control" id="exampleInputEmail1" placeholder="Từ khóa danh mục">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Mô Tả Danh Mục</label>
                                    <input type="text" value="{{$danhmuc->mota}}" name="mota" class="form-control" id="exampleInputEmail1" placeholder="Mô tả danh mục">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Kích hoạt danh mục</label>
                                <br>
                                <select name="kichhoat" class="custom-select">
                                    @if($danhmuc -> kichhoat==1)
                                    <option selected value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                    @else
                                    <option selected value="0">Không kích hoạt</option>
                                    <option value="1">Kích hoạt</option>
                                    @endif
                                </select>
                                </div>
                                
                                <button type="submit" name="themdanhmuc"  class="btn btn-info">Update</button>
                            </form>
                            
                            </div>

                        </div>
                    </section>

            </div>

            </div>
        </div>
@endsection