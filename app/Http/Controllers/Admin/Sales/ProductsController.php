<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sales\Products\StoreProductsRequest;
use App\Http\Requests\Admin\Sales\Products\UpdateProductsRequest;
use App\Models\Admin\Sales\Brand;
use App\Models\Admin\Sales\Category;
use App\Models\Admin\Sales\Color;
use App\Models\Admin\Sales\EachTypeProduct;
use App\Models\Admin\Sales\Product;
use App\Models\Admin\Sales\ImgProducts;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view("admin.pages.sales.products.index", compact("products","categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view("admin.pages.sales.products.add", compact("categories","brands"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        try {
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/upload/admin/products", $filename);
            $main_img = $request->merge(['main_img'=>$filename]);
            
            $products  = Product::create($request->all());
            if($products && $request->hasFile("photos")) {
                foreach ($request->photos as $key => $value) {
                    $filenames = $value->getClientOriginalName();
                    $value->storeAs("public/upload/admin/productImg", $filenames);
                    ImgProducts::create([
                        'product_id'=> $products->id,
                        'image'=> $filenames
                    ]);
                }
                alert()->success('Thành Công','Thêm mới sản phẩm thành công!');
                return redirect()->route('products.index');
            }else{
                alert()->error('Thất Bại','Xảy ra lỗi trong quá trình thêm mới !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->error('Thất Bại','Thêm mới thất bại !');
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $imgProducts = ImgProducts::where('product_id',$product->id)->get();
        $sub_img = [];
        return view('admin.pages.sales.products.edit', compact('brands','product','categories','imgProducts','sub_img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Product $product)
    {
        $img_products = ImgProducts::where('product_id',$product->id)->get();
        if($request->photo){
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/upload/admin/products", $filename);
            $image = $request->merge(['main_img'=>$filename]);
        }else{
            $filename = $product->main_img;
            $image = $request->merge(['main_img'=>$filename]);
        };

        try {
            $update = $product->update($request->all());
            if($update){
                if($request->hasFile("photos")){
                    ImgProducts::where('product_id',$product->id)->delete();
                    foreach ($request->photos as $key => $value) {
                        $filenames = $value->getClientOriginalName();
                        $value->storeAs("public/upload/admin/productImg", $filenames);
                        ImgProducts::create([
                            'product_id'=> $product->id,
                            'image'=> $filenames
                        ]);
                    }
                }
                alert()->success('Thành Công','Thêm mới sản phẩm thành công!');
                return redirect()->route('products.index');
            }else{
                alert()->error('Thất Bại','Xảy ra lỗi trong quá trình thêm mới !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->error('Thất Bại','Cập nhập thất bại !');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $delete = $product->delete();
            if($delete){
                alert()->success('Xóa thành công','1 sản phẩm đã được chuyển vào thùng rác!');
                return redirect()->route('products.index');
            }else{
                alert()->error('Xóa thất bại','Gặp lỗi trong quá trình xóa sản phẩm !');
                return redirect()->back();
            }
            
        } catch (\Throwable $th) {
                alert()->error('Xóa thất bại','Gặp lỗi trong quá trình xóa sản phẩm !');
                return redirect()->back();
        }   
    }

    public function trash(){
        $categories  = Category::onlyTrashed()->get();
        $trash = Product::onlyTrashed()->get();
        return view('admin.pages.sales.products.trash',compact('trash','categories'));
    }

    public function restore($id){
        try {
            $restore = Product::withTrashed()->find($id)->restore();
            if($restore){
                alert()->success('Khôi phục thành công','Loại sản phẩm và các sản phẩm liên quan đã khôi phục thành công !');
                return redirect()->route('products.index');
            }else{
                alert()->error('Khôi phục thất bại','Gặp lỗi trong quá trình khôi phục, vui lòng thử lại !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->error('Khôi phục thất bại','Gặp lỗi trong quá trình khôi phục, vui lòng thử lại !');
            return redirect()->back();
        }
    }

    public function forceDelete($id){
        try {
            ImgProducts::where('product_id',$id)->forceDelete();

            $forceDelete = Product::onlyTrashed()->find($id)->forceDelete();
            if($forceDelete){
                alert()->success('Xóa thành công','Loại sản phẩm và các sản phẩm liên quan đã bị xóa vĩnh viễn !');
                return redirect()->route('products.index');
            }else{
                alert()->error('Xóa thất bại','Gặp lỗi trong quá trình xóa, vui lòng thử lại !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            alert()->error('Xóa thất bại','Gặp lỗi trong quá trình xóa, vui lòng thử lại !');
            return redirect()->back();
        }
    }

    public function detail($id){
        $products = Product::where('product_id',$id)->get();
        return view('admin.pages.sales.products.detailProduct',compact('products'));
    }
    
}