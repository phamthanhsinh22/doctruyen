<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        return view('Admin.account.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //   $data = User::get();
        return view('Admin.account.create');
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
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required',
            'quyen' => 'required'
        ],
        [
            'email.required' => 'Vui Lòng nhập email',
            'email.unique' => 'Đã nhập bị trùng',
            'password.required' => 'Vui lòng nhập password',
            'quyen.required' => 'vui lòng nhập quyền',
            'email.email' => 'vui lòng nhập email hợp lệ'
        ]
    );
        $data['email'] = $request->email;
        $data['email_verified_at'] = Carbon::now();
        $data['password'] = bcrypt($request->password);
        $data['quyen'] = $request->quyen;
        $data = User::insert($data);
     
       
        return redirect()->back()->with('status', 'Create Success');
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
        $data = User::find($id);


        return view('Admin.account.edit',compact('data'));
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
        $data = User::find($id);
        $updt = $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required',
            'quyen' => 'required'

        ],
        [
            'email.required' => 'Vui lòng nhập gmail',
            'email.unique' => 'email đã bị trùng',
            'email.email' => 'vui lòng nhập đúng email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'quyen' => 'vui lòng chọn quyền'
        ]
    );
        $updt['email'] = $request->email;
        $updt['password'] = $request->password;
        $updt['quyen'] = $request->quyen;
        $updt = $data->update($updt);
        return redirect()->back()->with('status', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('status','Xóa User thành công');
    }
}
