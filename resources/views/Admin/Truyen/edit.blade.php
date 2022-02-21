@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Truyện
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
                                <form role="form" action="{{route('truyen.update',$truyen->id)}}" method="post" multipart="form/data">
                                    @method('PUT')
                                    {{csrf_field()}}
                                    
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tên Truyện</label>
                                    <input type="text" onkeyup="ChangeToSlug();" value="{{$truyen->tentruyen}}" name="tentruyen" class="form-control" id="slug" placeholder="Tên Truyện.....">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tác Gỉa</label>
                                    <input type="text" value="{{$truyen->tacgia}}" name="tacgia" class="form-control" placeholder="Tác giả Truyện.....">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Slug Truyện</label>
                                    <input type="text" value="{{$truyen->slug_truyen}}" id="convert_slug" name="slug_truyen" class="form-control" id="exampleInputEmail1" placeholder="Slug Truyện...">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Từ khóa Truyện</label>
                                    <input type="text" value="{{$truyen->tukhoa}}" id="convert_slug" name="tukhoa" class="form-control" id="exampleInputEmail1" placeholder="Slug Truyện...">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tóm tắt truyện</label>
                                    <textarea rows="5" name="tomtat" style="resize: none;" class="form-control">{{$truyen->tomtat}}</textarea>
                                </div>


                                <label for="exampleInputEmail1">Danh mục truyện</label>

 

                      @foreach($danhmuc as $key => $muc)

                       

                      <div class="form-check">

                          

                          <input class="form-check-input" 



                          @if( $thuocdanhmuc->contains($muc->id) ) checked @endif



                          name="danhmuc[]" type="checkbox" id="danhmuc_{{$muc->id}}" value="{{$muc->id}}">

                          <label class="form-check-label" for="danhmuc_{{$muc->id}}">{{$muc->tendanhmuc}}</label>

                         

                      </div>



                       @endforeach



                      <label for="exampleInputEmail1">Thể loại</label>

                      @foreach($theloai as $key => $the)

                      <div class="form-check">

                          

                          <input class="form-check-input"



                           @if( $thuoctheloai->contains($the->id) ) checked @endif



                          name="theloai[]" type="checkbox" id="theloai_{{$the->id}}" value="{{$the->id}}">

                          <label class="form-check-label" for="theloai_{{$the->id}}">{{$the->tentheloai}}</label>

                         

                      </div>

                       @endforeach
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Danh mục truyện</label>
                                <br>
                                <select name="danhmuc_id" class="custom-select">
                                    @foreach($danhmuc as $danh)
                                    <option {{ $danh->id == $truyen->danhmuc_id ? 'selected' : ''}} value="{{$danh->id}}">{{$danh->tendanhmuc}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                <label for="exampleInputEmail1">Thể loại truyện</label>
                                <br>
                                <select name="theloai_id" class="custom-select">
                                    @foreach($theloai as $value)
                                    <option {{ $value->id == $truyen->theloai_id ? 'selected' : ''}} value="{{$value->id}}">{{$value->tentheloai}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Hình ảnh Truyện</label>
                                    <input type="file" name="hinhanh"  class="form-control-file">
                                    <img height="250" width="180" src="{{asset('/uploads/truyen/'.$truyen->hinhanh)}}">
                                </div>

                                <div class="form-group">
                                <label for="exampleInputEmail1">Kích hoạt Truyện</label>
                                <br>
                                <select name="kichhoat" class="custom-select">
                                    @if($truyen -> kichhoat==1)
                                    <option selected value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                    @else
                                    <option selected value="0">Không kích hoạt</option>
                                    <option value="1">Kích hoạt</option>
                                    @endif
                                </select>
                                </div>
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Truyện nổi bật/hot</label>
                                <br>
                                <select name="truyennoibat" class="custom-select">

                                    @if($truyen->truyen_noibat==0)
                                    <option selected value="0">Truyện mới</option>
                                    <option value="1">Truyện nổi bật</option>
                                    <option value="2">Truyện xem nhiều</option>
                                    @elseif($truyen->truyen_noibat==1)
                                    <option value="0">Truyện mới</option>
                                    <option selected value="1">Truyện nổi bật</option>
                                    <option value="2">Truyện xem nhiều</option>
                                    @else
                                    <option value="0">Truyện mới</option>
                                    <option value="1">Truyện nổi bật</option>
                                    <option selected value="2">Truyện xem nhiều</option>

                                    @endif

                                </select>
                                </div>
                                <button type="submit" name="themdanhmuc"  class="btn btn-info">Update Truyện</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>
        </div>
@endsection