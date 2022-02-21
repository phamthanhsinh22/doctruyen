@extends('Admin.Layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Chapter Truyện
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
                                <form role="form" action="{{route('chapter.store')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tiêu Đề</label>
                                    <input type="text" onkeyup="ChangeToSlug();" value="{{old('tieude')}}" name="tieude" class="form-control" id="slug" placeholder="Tiêu Đề">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Slug Chapter</label>
                                    <input type="text" value="{{old('slug_chapter')}}" id="convert_slug" name="slug_chapter" class="form-control" id="exampleInputEmail1" placeholder="Slug Chapter">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tóm Tát</label>
                                    <input type="text" value="{{old('tomtat')}}" name="tomtat" class="form-control" id="exampleInputEmail1" placeholder="Tóm tắt...">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Nội Dung</label>
                                    <textarea name="noidung" value="{{old('noidung')}}" id="noidung_chapter" class="form-control" rows="5" style="resize: none;"></textarea>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Thuộc truyện</label>
                                    <br>
                                    <select name="truyen_id" class="custom-select">
                                        @foreach($truyen as $thuoctruyen)
                                        <option value="{{$thuoctruyen->id}}">{{$thuoctruyen->tentruyen}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Kích hoạt</label>
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