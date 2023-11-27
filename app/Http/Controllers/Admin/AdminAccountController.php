<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Accounts\StoreAccountsRequest;
use App\Http\Requests\Admin\Accounts\UpdateAccountRequest;
use App\Http\Requests\Admin\Accounts\UpdatePasswordsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.accounts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function new(StoreAccountsRequest $req)
    {
        $filename = $req->photo->getClientOriginalName();
        $req->photo->storeAs("public/upload/admin/avatars", $filename);
        $req->merge(['avatar'=>$filename]);
        $req->merge(['password'=>Hash::make($req->password)]);
        try {
            $admin = User::create($req->all());
            if($admin){
                alert()->success('Good','Thêm mới tài khoản Admin thành công !');
                return redirect()->route('account.create');
            }else{
                alert()->error('Oops','Thêm mới tài khoản Admin thất bại !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->error('Oops','Thêm mới tài khoản Admin thất bại !');
            return redirect()->back();
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(UpdateAccountRequest $request)
    {
        $user = Auth::user();
        $img_path = public_path('storage/upload/admin/avatars/'.$user->avatar);
        if($request->photo){
            if($img_path){
                unlink($img_path);
            }
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/upload/admin/avatars',$filename);
            $request->merge(['avatar'=>$filename]);
        }else{
            $request->merge(['avatar'=>$user->avatar]);
        }

        try {
            $update = $user->update($request->all());
            if($update){
                alert()->success('Yeah !','Update thông tin thành công');
                return redirect()->route('account.index');
            }else{
                alert()->error('Oops !','Update thông tin thất bại');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                alert()->error('Oops !','Update thông tin thất bại');
                return redirect()->back();
        }
    }

    public function updatePassword(UpdatePasswordsRequest $request,$user){

        $acc = Auth::user();
        if(Hash::check($request->password, $acc->password)){
            $update = Auth::user()->update(['password'=>Hash::make($request->newPassword)]);
            if($update){
                alert()->success('Yeah !','Update thông tin thành công');
                return redirect()->route('account.index');
            }else{
                alert()->error('Oops !','Update thông tin thất bại');
                return redirect()->back();
            }
        }else{
            alert()->error('Oops !','Vui lòng nhập đúng mật khẩu !');
            return redirect()->back();
        }
    }


    public function logonIndex()
    {
        return view('admin.pages.accounts.logon');
    }

    public function index(){
        $user = Auth::user();
        return view('admin.pages.accounts.setting',compact('user'));
    }
    public function logon(Request $req){
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect()->route('category.index');
        }else{
            alert()->error('Oops!', 'Đăng nhập thất bại,sai email hoặc mật khẩu !');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        alert()->success('Success', 'Logout success !');
        return redirect()->route('logon.index');
    }
}