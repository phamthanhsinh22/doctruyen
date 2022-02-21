<?php

namespace App\Http\Controllers;
use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\Truyen;
class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::with('truyen')->get();
        return view('Admin.chapter.index',compact('chapter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $truyen = Truyen::get();
        return view('Admin.chapter.create',compact('truyen'));
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
            'tieude' => 'required|unique:chapter|max:255',
            'tomtat' => 'required|unique:chapter|max:255',
            'slug_chapter' => 'required|max:255',
            'noidung' => 'required',
            'kichhoat'=> 'required',
            'truyen_id' =>'required',
        ],
        [
            'tieude.required' => 'Vui lòng bạn nhập tên truyện vào',
            'slug_chapter.required' => 'Vui lòng nhập slug truyện',
            'tomtat.required' => 'Vui lòng nhập tóm tắt',
            'noidung.required' => 'Vui lòng nhập nội dung',
            'tieude.unique' => 'Tiêu đề của truyện đã bị trùng',
            'slug_chapter.unique' => ' Slug chapter của truyện đã bị trùng',

        ]);
        $chapter = new Chapter();
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->noidung = $data['noidung'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->save();
        return redirect()->back()->with('status','Thêm Chapter thành công');
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
        $chapter = Chapter::find($id);
        $truyen = Truyen::get();
        return view('Admin.chapter.edit',compact('truyen','chapter'));
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
            'tieude' => 'required|max:255',
            'tomtat' => 'required|max:255',
            'noidung' => 'required',
            'slug_chapter' => 'required|max:255',
            'kichhoat'=> 'required',
            'truyen_id' =>'required',
        ],
        [
            'tieude.required' => 'Vui lòng bạn nhập tên truyện vào',
            'slug_chapter.required' => 'Vui lòng nhập slug truyện',
            'tomtat.required' => 'Vui lòng nhập tóm tắt',
            'noidung.required' => 'Vui lòng nhập nội dung',

        ]);
        $chapter = Chapter::find($id);
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->noidung = $data['noidung'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->save();
        return redirect()->back()->with('status','Cập nhật Chapter thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::find($id)->delete();
        return redirect()->back()->with('status','Bạn đã xóa thành công');
    }
}
