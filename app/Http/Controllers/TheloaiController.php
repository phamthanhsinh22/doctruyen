<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;
class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theloai = Theloai::get();
        return view('Admin.Theloai.index',compact('theloai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Admin.Theloai.create');
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
            'theloai' => 'required|unique:theloai|max:255',
            'sl_theloai' => 'required|unique:theloai|max:255',
            'mota1' => 'required',
            'tukhoa1' => 'required',
            'kichhoat1' => 'required',

        ],
        [
            'theloai.required' => 'Vui lòng nhập tên thể loại',
            'theloai.unique' => 'Tên thể loại đã bị trùng',
            'sl_theloai.required' => 'Vui lòng nhập slug thể loại',
            'tukhoa1.required' => 'Vui lòng nhập từ khóa',
            'sl_theloai.unique' => 'Slug thể loại đã bị trùng',
            'mota1.required' => 'Vui lòng nhập mô tả',
        ]);
        $theloai = new Theloai();
        $theloai->tentheloai = $data['theloai'];
        $theloai->slug_theloai = $data['sl_theloai'];
        $theloai->tukhoa = $data['tukhoa1'];
        $theloai->mota = $data['mota1'];
        $theloai->kichhoat = $data['kichhoat1'];
        $theloai->save();
        return redirect()->back()->with('status','Thêm thể loại thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theloai = Theloai::find($id);
        return view('Admin.Theloai.edit',compact('theloai'));
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
            'tentheloai' => 'required|max:255',
            'slug_theloai' => 'required|max:255',
            'mota' => 'required',
            'tukhoa' => 'required',
            'kichhoat' => 'required',

        ],
        [
            'tentheloai.required' => 'Vui lòng nhập tên thể loại',
            'slug_theloai.required' => 'Vui lòng nhập slug thể loại',
            'tukhoa.required' => 'Vui lòng nhập Từ khóa',
            'mota.required' => 'Vui lòng nhập mô tả',
        ]);
        $theloai = Theloai::find($id);
        $theloai->tentheloai = $data['tentheloai'];
        $theloai->slug_theloai = $data['slug_theloai'];
        $theloai->tukhoa = $data['tukhoa'];
        $theloai->mota = $data['mota'];
        $theloai->kichhoat = $data['kichhoat'];
        $theloai->save();
        return redirect()->back()->with('status','Update thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Theloai::find($id)->delete();
        return redirect()->back()->with('status','Xóa thể loại thành công');
    }
}
