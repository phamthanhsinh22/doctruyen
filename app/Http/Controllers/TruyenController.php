<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Theloai;
use App\Models\ThuocDanh;
use App\Models\ThuocLoai;
use App\Models\Chapter;
class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->get();
        return view('Admin.Truyen.index', compact('list_truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        return view('Admin.Truyen.create',compact('danhmuc','theloai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tentruyen' => 'required|unique:truyen|max:255',
            'tomtat' => 'required',
            'slug_truyen' => 'required|unique:truyen|max:255',
            'kichhoat'=> 'required',
            'tukhoa'=> 'required',
            'tacgia' => 'required',
            'danhmuc' =>'required',
            'theloai' =>'required',
            'truyennoibat' =>'required',
            'hinhanh' => 'required',

        ],
        [
            'tentruyen.required' => 'Vui lòng bạn nhập tên truyện vào',
            'tentruyen.unique' => 'Tên truyện đã tồn tại',
            'slug_truyen.unique' => 'Slug đã tồn tại',
            'slug_truyen.required' => 'Vui lòng nhập slug truyện',
            'tukhoa.required' => 'Vui lòng nhập Từ khóa',
            'tomtat.required' => 'Vui lòng nhập tóm tắt',
            'tacgia.required' => 'Vui lòng nhập tác giả',
            'hinhanh.required' => 'Hình ảnh bắt buộc',

        ]);
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tukhoa = $data['tukhoa'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->theloai_id = $data['theloai'];
       
       
        
        $truyen->truyen_noibat = $data['truyennoibat'];
        $truyen->hinhanh = $data['hinhanh'];
        $truyen->save();
        $truyen->thuocnhieudanhmuctruyen()->attach($data['danhmuc']);
        $truyen->thuocnhieutheloaitruyen()->attach($data['theloai']);
        return redirect()->back()->with('status','Thêm truyện thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truyen = Truyen::find($id);
        $thuocdanhmuc = $truyen->thuocnhieudanhmuctruyen;
        $thuoctheloai = $truyen->thuocnhieutheloaitruyen;
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        return view('Admin.Truyen.edit', compact('truyen','danhmuc','theloai','thuocdanhmuc','thuoctheloai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tentruyen' => 'required|max:255',
            'tomtat' => 'required',
            'tacgia' => 'required',
            'slug_truyen' => 'required|max:255',
            'kichhoat'=> 'required',
            'tukhoa'=> 'required',
            'danhmuc' =>'required',
            'truyennoibat' =>'required',
            'theloai' =>'required',
            'hinhanh' =>'required',
        ],
        [
            'tentruyen.required' => 'Vui lòng bạn nhập tên truyện vào',
            'slug_truyen.required' => 'Vui lòng nhập slug truyện',
            'tukhoa.required' => 'Vui lòng nhập từ khóa',
            'tomtat.required' => 'Vui lòng nhập tóm tắt',
            'tacgia.required' => 'Vui lòng nhập tác giả',

        ]);
        $truyen = Truyen::find($id);
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tukhoa = $data['tukhoa'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->theloai_id = $data['theloai'];
        $truyen->truyen_noibat = $data['truyennoibat'];
        $truyen->hinhanh = $data['hinhanh'];
        
        
        // them hinh anh vao folder
      //  $get_image = $request->hinhanh;
       // if($get_image){
        //    $path = '/uploads/truyen/';
        //    $get_name_image = $get_image->getClientOriginalName();
         //   $name_image = current(explode('.',$get_name_image));
          //  $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
          //  $get_image->move($path,$new_image);
          //  $truyen->hinhanh = $new_image;
       // }
        $truyen->save();
        return redirect()->back()->with('status','Cập nhật truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //  $truyen = Truyen::find($id);
       // $path = '/uploads/truyen/'.$truyen->hinhanh;
       // if(file_exists($path)){
     //      unlink($path);
      //  }
        Truyen::find($id)->delete();
        return redirect()->back()->with('status','Xóa truyện thành công');
    }
}
