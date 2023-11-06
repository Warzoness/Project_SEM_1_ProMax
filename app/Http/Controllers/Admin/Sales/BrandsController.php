<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
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
    public function store(Request $request)
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

    public function trash(){
        return view("admin.pages.sales.brands.trash");
    }

    public function restore(){
        return view("admin.pages.sales.brands.restore");
    }

    public function forceDelete(){
        return view("admin.pages.sales.brands.forceDelete");
    }
    
}