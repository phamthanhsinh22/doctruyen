<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Truyen;

class loginController extends Controller
{
    public function getLogin(){
        return view('Login.login');
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }
    public function postLogin(Request $request){
        $arr = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Vui Lòng nhập email',
            'email.email' => 'Vui lòng nhập thêm email vào',
            'password.required' => 'Vui lòng nhập mật khẩu'
        ]);
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($arr)){
            if(Auth::user()->quyen == '1')
                return redirect('admin');
            else 
                if(Auth::user()->quyen == '0')
                    return redirect('trangchu');

            
        }
        else{
            return redirect('dangnhap')->with('message','Nhập sai email hoặc mật khẩu');
        }
    }
    public function getRegister(){
        $danhmuc = DB::table('danhmuc')->get();
        $theloai = DB::table('theloai')->get();
        return view('Login.register', compact('danhmuc','theloai'));
    }
    public function postRegister(Request $request){
        $arr = $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required',
            'repassword' => 'required|same:password',
            'quyen' => 'required'
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng email',
            'email.unique' => 'Email đã bị trùng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'repassword.required' => 'Vui lòng nhập xác minh mật khẩu',
            'repassword.same' => 'Password xác minh không khớp',

        ]
    );
        $arr = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verified_at' => Carbon::now(),
            'quyen' => $request->quyen,
        ];
        $arr = User::insert($arr);
        $truyen = Truyen::get();
        $danhmuc = DB::table('danhmuc')->get();
        $truyen_noibat = Truyen::get();
        $theloai = DB::table('theloai')->get();
        return view('layout.index',compact('truyen','danhmuc','truyen_noibat','theloai'));
    }
}
