@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Truyện
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
                                <form role="form" action="{{route('theloai.store')}}" method="post" multipart="form/data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tên Thể loại</label>
                                    <input type="text" onkeyup="ChangeToSlug();" value="{{old('tentruyen')}}" name="theloai" class="form-control" id="slug" placeholder="Tên Thể loại.....">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Slug Thể loại</label>
                                    <input type="text" value="{{old('slug_theloai')}}" id="convert_slug" name="sl_theloai" class="form-control" id="exampleInputEmail1" placeholder="Slug Thể loại...">
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Từ khóa</label>
                                    <input type="text" value="{{old('tentruyen')}}" name="tukhoa1" class="form-control"  placeholder="Từ khóa.....">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Mô Tả</label>
                                    <textarea value="{{old('mota1')}}" rows="5" name="mota" style="resize: none;" class="form-control"></textarea>
                                </div>


                                <div class="form-group">
                                <label for="exampleInputEmail1">Kích hoạt Thể loại</label>
                                <br>
                                <select name="kichhoat1" class="custom-select">
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                </select>
                                </div>
                                <button type="submit" name=""  class="btn btn-info">Add Thể loại</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>
        </div>
@endsection