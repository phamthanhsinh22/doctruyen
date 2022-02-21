<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
use App\Models\Theloai;
class pageController extends Controller
{
    public function getIndex(){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        $truyen = Truyen::where('kichhoat',1)->get();
        $truyen_noibat = Truyen::where('kichhoat',1)->where('truyen_noibat',1)->get();
        return view('layout.index',compact('danhmuc','truyen','theloai','truyen_noibat'));
    }
    public function danhmuc($slug){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        $danhmuc_id = DanhmucTruyen::where('slug_danhmuc',$slug)->first();
        $tendanhmuc = $danhmuc_id->tendanhmuc;
        $truyen = Truyen::where('kichhoat',1)->where('danhmuc_id',$danhmuc_id->id)->get();
        return view('layout.danhmuc',compact('danhmuc','truyen','theloai','tendanhmuc'));
    }
    public function theloai($slug){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
       // $tendanhmuc = $danhmuc->tendanhmuc;
        $theloai_id = Theloai::where('slug_theloai',$slug)->first();
        $tentheloai = $theloai_id->tentheloai;
        $truyen = Truyen::where('kichhoat',1)->where('theloai_id',$theloai_id->id)->get();
        return view('layout.theloai',compact('danhmuc','truyen','theloai','theloai_id','tentheloai'));
    }
    public function xemtruyen($slug){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('slug_truyen',$slug)->where('kichhoat',1)->first();
        $chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->get();
        $chapter_dau = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->first();
        $chapter_moinhat = Chapter::with('truyen')->orderBy('id','DESC')->where('truyen_id',$truyen->id)->limit(2)->get();

        return view('layout.truyen',compact('danhmuc','truyen','chapter','chapter_dau','theloai','chapter_moinhat'));
    }
    public function xemchapter($slug){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        $truyen = Chapter::where('slug_chapter',$slug)->first();
        //breadcrumb
        $truyen_breadcrumb = Truyen::with('danhmuctruyen','theloai')->where('id',$truyen->truyen_id)->first();
        //end
        $chapter = Chapter::with('truyen')->where('slug_chapter',$slug)->where('truyen_id',$truyen->truyen_id)->first();
        $all_chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->truyen_id)->get();
        $next_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','>' ,$chapter->id)->min('slug_chapter');
        $previous_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','<', $chapter->id)->max('slug_chapter');
        $max_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','DESC')->first();
        $min_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','ASC')->first();
        return view('layout.chapter',compact('danhmuc','chapter','truyen','all_chapter','next_chapter','previous_chapter','max_id','min_id','theloai','truyen_breadcrumb'));
    }
    public function timkiem(Request $request){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();

        $keyword = $request->keyword;
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('tentruyen','LIKE','$'.$keyword.'$')->get();
        return view('layout.timkiem',compact('danhmuc','truyen','theloai','keyword'));
    }
    public function getTruyennoibat(){
        $theloai = Theloai::get();
        $danhmuc = DanhmucTruyen::get();
        $truyen = Truyen::where('kichhoat',1)->where('truyen_noibat',1)->get();
       // $danhmuc_id = DanhmucTruyen::where('slug_danhmuc', $slug)->first();
       // $tendanhmuc = $danhmuc_id->tendanhmuc;
        return view('layout.truyennoibat',compact('theloai','danhmuc','truyen'));
    }
}