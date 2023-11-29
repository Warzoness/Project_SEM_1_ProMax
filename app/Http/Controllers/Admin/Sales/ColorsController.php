<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sales\Color;
use App\Models\Admin\Sales\ImgProducts;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $colors = Color::all();
        return view("admin.pages.sales.colors.index",compact("colors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.sales.colors.add");
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
        $request->photo->storeAs("public/upload/admin/colors", $filename);
        $request->merge(['image'=>$filename]);
        try {
            $color = Color::create($request->all());
            if($color){
                alert()->success('Thành Công','Thêm Mới Màu Thành Công !');
                return redirect()->route('colors.index');
            }else{
                alert()->error('Oops','Xảy ra lỗi trong quá trình thêm mới !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                alert()->error('Oops','Xảy ra lỗi trong quá trình thêm mới !');
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
    public function edit(Color $color)
    {
        return view("admin.pages.sales.colors.edit",compact("color"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        if($request->photo){
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/upload/admin/colors", $filename);
            $request->merge(["logo"=>$filename]);
        }else{
            $request->merge(["logo"=>$color->logo]);
        }

        try {
            $update = $color->update($request->all());
            if($update){
                alert()->success("Thành Công ! ","Update màu sắc thành công");
                return redirect()->route("colors.index");
            }else{
                alert()->error("Thất Bại !","Update màu sắc thất bại");
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            alert()->error("Thất Bại !","Update màu sắc thất bại");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        $delete = $color->delete();
        try {
            if($delete){
                alert()->success("Thành Công !","Xóa màu sắc thành công");
                return redirect()->route("colors.index");
            }else{
                alert()->error("Thất Bại!","Xóa màu sắc thất bại");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                alert()->error("Thất Bại!","Xóa màu sắc thất bại");
                return redirect()->back();
        }        
    }

    public function trash(){
        $trashes = Color::onlyTrashed()->get();
        return view("admin.pages.sales.colors.trash",compact('trashes'));
    }

    public function restore($id){
        $color = Color::withTrashed()->where("id",$id);
        $restore = $color->restore();
        try {
            if($restore){
                alert()->success("Thành Công","Khôi phục màu sắc thành công!");
                return redirect()->route("colors.index");
            }else{
                alert()->error("Thất Bại","Khôi phục màu sắc thất bại!");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error("Thất Bại","Khôi phục màu sắc thất bại !");
            return redirect()->back();
        }
    }

    public function forceDelete($id){
           
        try {
            $forceDelete = Color::withTrashed()->where("id",$id)->forceDelete();
            if($forceDelete){
                alert()->success("Thành Công","Xóa vĩnh viễn màu sắc thành công!");
                return redirect()->route("colors.index");
            }else{
                alert()->error("Thất Bại","Xóa vĩnh viễn màu sắc thất bại!");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error("Thất Bại","Xóa vĩnh viễn màu sắc thất bại !");
            return redirect()->back();
        }
    }
    
}