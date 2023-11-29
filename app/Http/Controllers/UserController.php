<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fe.home.sign-in');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fe.home.sign-up');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->merge(['password'=>Hash::make($request->password)]);
        try {
            $register = User::create($request->all());
            if($register){
                alert()->success('Thành Công','Tạo tài khoản thành công !');
                return redirect()->route('user.index');
            }else{
                alert()->success('Thành Công','Tạo tài khoản thất bại !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->success('Thành Công','Tạo tài khoản thất bại !');
            return redirect()->back();
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        try {
            $login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if($login){
                alert()->success('Chúc Mừng','Đăng nhập thành công !');
                return redirect()->route('home.index');
            }else{
                alert()->error('Oops','Sai tài khoản hoặc mật khẩu!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error('Oops','Sai tài khoản hoặc mật khẩu!');
            return redirect()->back();
        }
    }

    public function logout(){
        $logout = Auth::logout();
        alert()->success('Success', 'Logout success !');
        return redirect()->route('home.index');
    }
}