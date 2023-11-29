<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sales\Brands\StoreBrandsRequest;
use App\Http\Requests\Admin\Sales\Brands\UpdateBrandsRequest;
use App\Models\Admin\Sales\Category;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;
use App\Models\Admin\Sales\Brand;
use RealRashid\SweetAlert\Facades\Alert;


class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brands = Brand::all();
        return view("admin.pages.sales.brands.index",compact("brands"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.sales.brands.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandsRequest $request)
    {
        $filename = $request->photo->getClientOriginalName();
        $request->photo->storeAs("public/upload/admin/brands", $filename);
        $request->merge(["logo"=>$filename]);
        $brand = Brand::create($request->all());
        try {
            if($brand){
                alert()->success("Thành Công","Thêm Mới Nhãn Hàng Thành Công !");
                return redirect()->route("brands.index");
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
    public function edit(Brand $brand)
    {
        return view("admin.pages.sales.brands.edit",compact("brand"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandsRequest $request, Brand $brand)
    {
        if($request->photo){
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/upload/admin/brands", $filename);
            $request->merge(["logo"=>$filename]);
        }else{
            $request->merge(["logo"=>$brand->logo]);
        }

        try {
            $update = $brand->update($request->all());
            if($update){
                alert()->success("Thành Công ! ","Update nhãn hàng thành công");
                return redirect()->route("brands.index");
            }else{
                alert()->error("Thất Bại !","Update nhãn hàng thất bại");
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            alert()->error("Thất Bại !","Update nhãn hàng thất bại");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {

        $delete = $brand->delete();
        try {
            if($delete){
                alert()->success("Thành Công !","Xóa nhãn hàng thành công");
                return redirect()->route("brands.index");
            }else{
                alert()->error("Thất Bại!","Xóa nhãn hàng thất bại");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                alert()->error("Thất Bại!","Xóa nhãn hàng thất bại");
                return redirect()->back();
        }        
    }

    public function trash(){
        $trashes = Brand::onlyTrashed()->get();
        return view("admin.pages.sales.brands.trash",compact('trashes'));
    }

    public function restore($id){
        $brand = Brand::withTrashed()->where("id",$id);
        $restore = $brand->restore();
        try {
            if($restore){
                alert()->success("Thành Công","Khôi phục nhãn hàng thành công!");
                return redirect()->route("brands.index");
            }else{
                alert()->error("Thất Bại","Khôi phục nhãn hàng thất bại!");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error("Thất Bại","Khôi phục nhãn hàng thất bại !");
            return redirect()->back();
        }
    }

    public function forceDelete($id){
        try {
            $forceDelete = Brand::withTrashed()->where("id",$id)->forceDelete();
            if($forceDelete){
                alert()->success("Thành Công","Xóa vĩnh viễn nhãn hàng thành công!");
                return redirect()->route("brands.index");
            }else{
                alert()->error("Thất Bại","Xóa vĩnh viễn nhãn hàng thất bại!");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->error("Thất Bại","Xóa vĩnh viễn nhãn hàng thất bại !");
            return redirect()->back();
        }
    }
    
}