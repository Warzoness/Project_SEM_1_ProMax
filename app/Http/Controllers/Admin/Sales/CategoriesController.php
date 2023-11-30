<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sales\StoreCategoriesRequest;
use App\Http\Requests\Admin\Sales\UpdateCategoriesRequest;
use App\Models\Admin\Sales\Brand;
use App\Models\Admin\Sales\Category;
use App\Models\Admin\Sales\ImgProducts;
use App\Models\Admin\Sales\Product;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view("admin.pages.sales.categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.pages.sales.categories.add",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesRequest $request)
    {
        $filename = $request->photo->getClientOriginalName();
        $request->photo->storeAs("public/upload/admin/categories", $filename);
        $request->merge(['image'=>$filename]);
        try {
            $category = Category::create($request->all());
            if($category){
                alert()->success('success','Add new category success !');
                return redirect()->route('category.index');
            }else{
                alert()->error('error','Add new category has error !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                dd($th);
                alert()->error('error','Add new category has error !');
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
    public function edit(Category $category)
    {
        $categories = Category::where('id','!=',$category->id)->get();
        return view('admin.pages.sales.categories.edit', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    
    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        $img_path = public_path('storage/upload/admin/categories/'.$category->image);
        if($request->photo){
            unlink($img_path);
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/upload/admin/categories", $filename);
            $request->merge(['image'=>$filename]);
        }else{
            $filename = $category->image;
            $request->merge(['image'=>$filename]);
        }
        
        try {
            $update = $category->update($request->all());
            if($update){
                alert()->success('success','Update Successfully !');
                return redirect()->route('category.index');
            }else{
                alert()->error('error','Update Fail !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error('error','Update Fail !');
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
        try {
            Product::where('category_id',$category->id)->delete();
            if($category->delete()) {
                alert()->success('success','Chuyển thành công vào thùng rác !');
                return redirect()->route('category.index');
            }else{
                alert()->error('error','Chuyển vào thùng rác thất bại !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error('error','Chuyển vào thùng rác thất bại !');
            return redirect()->back();
        }
    }

    public function trash(){
        $trash = Category::onlyTrashed()->get();
        $brands = Brand::withTrashed()->get();
        return view('admin.pages.sales.categories.trash',compact('trash','brands'));
    }

    public function restore($id){
        
        $restore = Category::withTrashed()->find($id)->restore();
        Product::withTrashed()->where('category_id',$id)->restore();
        try {
            if($restore){
                alert()->success('Congratulations','Restore Item Successfully !');
                return redirect()->route('categories.trashIndex');
            }else{
                alert()->error('Fail','Restore Item Fail !');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
                alert()->error('Fail','Restore Item Fail !');
                return redirect()->back();
        }
    }

    public function forceDelete($id){
        $categoriesSub = Category::where('parent_id',$id)->get();
        if(!empty($categoriesSub->all())){
            alert()->error('Lỗi !','Vui lòng xóa danh mục phụ trước !');
            return redirect()->back();
        }else{
            $products = Product::withTrashed()->where('category_id',$id)->get();
            if(!empty($products->all())){
                alert()->error('Lỗi !','Vui lòng xóa sản phẩm trước !');
                return redirect()->back();
            }else{
                $delete = Category::withTrashed()->find($id)->forceDelete();
                try {
                    if($delete){
                        alert()->success('Thành Công','Xóa vĩnh viễn thành công !');
                        return redirect()->route('categories.trashIndex');
                    }else{
                        alert()->error('Lỗi !','Xóa vĩnh viễn thất bại !');
                        return redirect()->back();
                    }
                } catch (\Throwable $th) {
                        alert()->error('Lỗi !','Xóa vĩnh viễn thất bại !');
                        return redirect()->back();
                }
            }
        }
    }
}