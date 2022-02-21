<?php

namespace App\Http\Controllers;
use App\Repositories\DanhmucRepository;
use App\Repositories\interfaces\DanhmucRepositoryInterface as DanhmucInterface;
use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use DB;
class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $danhmucRepository;

    public function __construct(DanhmucInterface $danhmucRepository){

        $this->danhmucRepository = $danhmucRepository;
    }

    public function index()
    {
        $danhmuctruyen = $this->danhmucRepository->getAll();
        return view('Admin.Danhmuc.index',['danhmuctruyen'=>$danhmuctruyen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Danhmuc.create');
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
            'tendanhmuc' => 'required|unique:danhmuc|max:255',
            'slug_danhmuc' => 'required|unique:danhmuc|max:255',
            'mota' => 'required',
            'tukhoa' => 'required',
            'kichhoat' => 'required',
        ],
        [
            'tendanhmuc.unique' => 'Tên đã bị trùng vui lòng nhập tên khác',
            'slug_danhmuc.unique' => 'Slug đã bị trùng vui lòng nhập slug khác',
            'tendanhmuc.required' => 'Vui lòng nhập tên danh mục',
            'tukhoa.required' => 'Vui lòng nhập từ khóa',
            'mota.required' => 'Vui lòng nhập mô tả',
        ]
    );

        $danhmuctruyen = new DanhmucTruyen();
        $danhmuctruyen->tendanhmuc = $data['tendanhmuc'];
        $danhmuctruyen->slug_danhmuc = $data['slug_danhmuc'];
        $danhmuctruyen->tukhoa = $data['tukhoa'];
        $danhmuctruyen->mota = $data['mota'];
        $danhmuctruyen->kichhoat = $data['kichhoat'];
        $danhmuctruyen->save();
        return redirect()->back()->with('status','Thêm danh mục thành công');
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
        $danhmuc = DanhmucTruyen::find($id);
        return view('Admin.Danhmuc.edit',compact('danhmuc'));
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
            'tendanhmuc' => 'required|max:255',
            'slug_danhmuc' => 'required|max:255',
            'mota' => 'required',
            'tukhoa' => 'required',
            'kichhoat' => 'required',
        ],
        [
            'tendanhmuc.required' => 'Vui lòng nhập tên danh mục',
            'mota.required' => 'Vui lòng nhập mô tả',
            'mota.required' => 'Vui lòng nhập từ khóa',

        ]
    );

        $danhmuctruyen = DanhmucTruyen::find($id);
        $danhmuctruyen->tendanhmuc = $data['tendanhmuc'];
        $danhmuctruyen->slug_danhmuc = $data['slug_danhmuc'];
        $danhmuctruyen->tukhoa = $data['tukhoa'];
        $danhmuctruyen->mota = $data['mota'];
        $danhmuctruyen->kichhoat = $data['kichhoat'];
        $danhmuctruyen->save();
        return redirect()->back()->with('status','Cập nhật danh mục thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->danhmucRepository->delete($id);
        return redirect()->route('danhmuc.index')->with('status','Xóa thành công');
    }
}
