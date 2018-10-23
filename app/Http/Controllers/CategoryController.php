<?php
namespace App\Http\Controllers;
use App\Category;
use App\Custom;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getListCategory(){
        $listCategory = Category::all();
        return view('admin.category.list', compact('listCategory'));
    }
    public function getAddCategory(){
        return view('admin.category.add');
    }
    public function postAddcategory(Request $request){
        $this->validate($request, [
            'title'          => 'required|min:2|max:100',
        ],[
            'title.required' => 'Tên loại không được trống.',
            'title.min'      => 'Tên loại phải lớn hơn 2 kí tự.',
            'title.max'      => 'Tên loại phải nhỏ hơn 100 kí tự',
        ]);
        $category = new Category;
        $custom   = new Custom;
        $category->title = $request->title;
        $category->title_sale = $custom->convert_vi_to_en($request->title);
        $category->sex = $request->sex;
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->with('success','Thêm loại thành công !');
    }
}