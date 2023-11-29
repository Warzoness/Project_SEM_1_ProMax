<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sales\paymentMethod;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    public function index()
    {

        $paymentMethods = paymentMethod::all();
        return view("admin.pages.sales.paymentMethods.index",compact("paymentMethods"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.sales.paymentMethods.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = $request->photo->getClientOriginalName();
        $request->photo->storeAs("public/upload/admin/paymentMethods", $filename);
        $request->merge(["logo"=>$filename]);
        $paymentMethod = paymentMethod::create($request->all());
        try {
            if($paymentMethod){
                alert()->success("Thành Công","Thêm Mới phương thức thanh toán Thành Công !");
                return redirect()->route("paymentMethods.index");
            }else{
                alert()->error("Lỗi","Thêm Mới Thất Bại !");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error("Lỗi","Thêm Mới Thất Bại !");
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
    public function edit(paymentMethod $paymentMethod)
    {
        return view("admin.pages.sales.paymentMethods.edit",compact("paymentMethod"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paymentMethod $paymentMethod)
    {
        if($request->photo){
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/upload/admin/paymentMethods", $filename);
            $request->merge(["logo"=>$filename]);
        }else{
            $request->merge(["logo"=>$paymentMethod->logo]);
        }

        try {
            $update = $paymentMethod->update($request->all());
            if($update){
                alert()->success("Thành Công ! ","Update phương thức thanh toán thành công");
                return redirect()->route("paymentMethods.index");
            }else{
                alert()->error("Thất Bại !","Update phương thức thanh toán thất bại");
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            alert()->error("Thất Bại !","Update phương thức thanh toán thất bại");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentMethod $paymentMethod)
    {

        $delete = $paymentMethod->delete();
        try {
            if($delete){
                alert()->success("Thành Công !","Xóa phương thức thanh toán thành công");
                return redirect()->route("paymentMethods.index");
            }else{
                alert()->error("Thất Bại!","Xóa phương thức thanh toán thất bại");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                alert()->error("Thất Bại!","Xóa phương thức thanh toán thất bại");
                return redirect()->back();
        }        
    }

    public function trash(){
        $trashes = paymentMethod::onlyTrashed()->get();
        return view("admin.pages.sales.paymentMethods.trash",compact('trashes'));
    }

    public function restore($id){
        $paymentMethod = paymentMethod::withTrashed()->where("id",$id);
        $restore = $paymentMethod->restore();
        try {
            if($restore){
                alert()->success("Thành Công","Khôi phục phương thức thanh toán thành công!");
                return redirect()->route("paymentMethods.index");
            }else{
                alert()->error("Thất Bại","Khôi phục phương thức thanh toán thất bại!");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error("Thất Bại","Khôi phục phương thức thanh toán thất bại !");
            return redirect()->back();
        }
    }

    public function forceDelete($id){
        try {
            $forceDelete = paymentMethod::withTrashed()->where("id",$id)->forceDelete();
            if($forceDelete){
                alert()->success("Thành Công","Xóa vĩnh viễn phương thức thanh toán thành công!");
                return redirect()->route("paymentMethods.index");
            }else{
                alert()->error("Thất Bại","Xóa vĩnh viễn phương thức thanh toán thất bại!");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error("Thất Bại","Xóa vĩnh viễn phương thức thanh toán thất bại !");
            return redirect()->back();
        }
    }
}