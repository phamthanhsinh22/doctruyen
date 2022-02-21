<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use App\Models\DanhmucTruyen;
use App\Models\Theloai;
use DB;
use Mail;

use Illuminate\Support\Str;
class ResetPasswordController extends Controller
{
    
    public function showForgetPasswordForm(){
        $danhmuc = DB::table('danhmuc')->get();
        $theloai = DB::table('theloai')->get();
        return view('Login.forgetPassword',compact('danhmuc','theloai'));
    }
    public function submitForgetPasswordForm(Request $request){
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $users = User::where('email','=',$data['email'])->get();
        $title_mail = "Lấy lại mật khẩu".''.$now;
        foreach($users as $value){
            $users_id = $value->id;
        }
        if($users){
            $count = $users->count();
            if($count==0){
                return redirect()->back()->with('error','Email chưa được đăng kí');
            }else{
                $token_random = Str::random();
                $users = User::find($users_id);
                $users->remember_token = $token_random;
                $users->save();
                // send mail

                $to_email = $data['email']; // gửi đến email này
                $link_reset_pass = url('/update-new-pass?email='.$to_email.'&token='.$token_random);
                $data = array("name"=>$title_mail,"body"=>$link_reset_pass,'email'=>$data['email']);
                Mail::send('email.forgetPassword',['data'=>$data],function($message) use ($title_mail,$data){
                    $message->to($data['email'])->subject($title_mail); //send this email with
                    $message->from($data['email'],$title_mail); // send from this mail
                });
                return redirect()->back()->with('message','gửi mail thành công');
            }
        }
        return back()->with('message','We have e-mailed your password reset link!');
    }
    public function showResetPasswordForm($token){
        return view('Login.forgetPasswordLink',['token' => $token]);
    }
    public function submitResetPasswordForm(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|some::password'
        ]);
        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();
        if(!$updatePassword){
            return back()->withInput()->with('error','Invalid token!');
        }
        $user = User::where('email',$request->email)->update([
            'password'=> hash::make($request->password)
        ]);
        DB::table('password_resets')->where([
            'email' => $request->email
        ])->delele();
        return redirect('dangnhap')->with('message','Your password has been changed!');
    }
}
