@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Thể loại
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                                <form role="form" action="{{route('theloai.update',$theloai->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tên Thể loại</label>
                                    <input type="text" onkeyup="ChangeToSlug();" value="{{$theloai->tentheloai}}" name="tentheloai" class="form-control" id="slug" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Slug Thể loại</label>
                                    <input type="text" value="{{$theloai->slug_theloai}}" name="slug_theloai" id="convert_slug" class="form-control" id="exampleInputEmail1" placeholder="Slug Thể loại...">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Từ khóa</label>
                                    <input type="text" value="{{$theloai->tukhoa}}" name="tukhoa" id="convert_slug" class="form-control" id="exampleInputEmail1" placeholder="Từ khóa Thể loại...">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Mô Tả Danh Mục</label>
                                    <input type="text" value="{{$theloai->mota}}" name="mota" class="form-control" id="exampleInputEmail1" placeholder="Mô tả Thể loai">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Kích hoạt Thể loại</label>
                                <br>
                                <select name="kichhoat" class="custom-select">
                                    @if($theloai -> kichhoat==1)
                                    <option selected value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                    @else
                                    <option selected value="0">Không kích hoạt</option>
                                    <option value="1">Kích hoạt</option>
                                    @endif
                                </select>
                                </div>
                                
                                <button type="submit" name=""  class="btn btn-info">Update</button>
                            </form>
                            
                            </div>

                        </div>
                    </section>

            </div>

            </div>
        </div>
@endsection