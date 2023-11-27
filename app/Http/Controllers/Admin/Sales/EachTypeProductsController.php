<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sales\EtProducts\UpdateEtProductsRequest;
use App\Models\Admin\Sales\EachTypeProduct;
use App\Models\Admin\Sales\ImgProducts;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;

class EachTypeProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $etproducts = EachTypeProduct::all();
        return view("admin.pages.sales.products.index",compact("products","etproducts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view("admin.pages.sales.products.add-etproducts",compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        try {
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/upload/admin/mainImgProducts',$filename);
            $request->merge(['main_img'=>$filename]);

            $products = EachTypeProduct::create($request->all());
            if($products && $request->hasFile("photos")) {
                foreach ($request->photos as $key => $value) {
                    $filenames = $value->getClientOriginalName();
                    $value->storeAs("public/upload/admin/productImg", $filenames);
                    ImgProducts::create([
                        'eachTypeProduct_id'=> $products->id,
                        'image'=> $filenames
                    ]);
                }
                alert()->success('Thành Công','Thêm mới sản phẩm thành công!');
                return redirect()->route('etproducts.index');
            }else{
                alert()->error('Thất Bại','Xảy ra lỗi trong quá trình thêm mới !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                dd($th);
                alert()->error('Thất Bại','Xảy ra lỗi trong quá trình thêm mới !');
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
    public function edit(EachTypeProduct $etproduct)
    {
        $products = Product::all();
        $imgs = ImgProducts::where('eachTypeProduct_id',$etproduct->id)->get();
        return view('admin.pages.sales.products.editEtproducts',compact('etproduct','products','imgs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtProductsRequest $request, EachTypeProduct $etproduct)
    {
        $imgs = ImgProducts::where('eachTypeProduct_id',$etproduct->id)->get();
        dd($imgs);
        foreach ($imgs as $key => $value) {
            array_push($request->image,$value->image);
        }
        dd($request->all());
        try {
            $update = $etproduct->update($request->all());
            foreach ($request->photos as $key => $value) {
                $filenames = $value->getClientOriginalName();
                $value->storeAs("public/upload/admin/productImg", $filenames);
                ImgProducts::create([
                    'eachTypeProduct_id'=> $etproduct->id,
                    'image'=> $filenames
            ]);
                }
                alert()->success('Thành Công','Thêm mới sản phẩm thành công!');
                return redirect()->route('etproducts.index');
            
        } catch (\Throwable $th) {
                dd($th);
                alert()->error('Thất Bại','Xảy ra lỗi trong quá trình thêm mới !');
                return redirect()->back();
        }
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
}