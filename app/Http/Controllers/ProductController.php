<?php
namespace App\Http\Controllers;
use App\Category;
use App\Custom;
use App\Images;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDashboard(){
        return view('admin.dashboard.dashboard');
    }
    public function getProduct(){
        $dssanpham = Product::all();
        return view('admin.product.list', compact('dssanpham'));
    }
    public function getAddProduct(){
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }
    public function postAddProduct(Request $request){
        $this->validate($request,[
            'title'               => 'required|min:2|max:100',
            'unit_price'          => 'required',
            'unit'                => 'required|numeric'
        ],[
            'title.required'      => 'Tên sản phẩm không được trống.',
            'title.min'           => 'Tên sản phẩm phải lớn hơn 2 kí tự.',
            'title.max'           => 'Tên sản phẩm phải nhỏ hơn 100 kí tự.',
            'unit_price.required' => 'Giá bán không được trống.',
            'unit.required'       => 'Số lượng không được trống.',
            'unit.numeric'        => 'Sổ lượng phải là sổ.'
        ]);
        $product                  = new Product;
        $custom                   = new Custom;
        $product->title           = $request->title;
        $product->title_sale      = strtolower($custom->convert_vi_to_en($request->title));
        $product->category_id     = $request->category;
        $product->description     = $request->note;
        $product->sex             = $request->sex;
        $product->unit_price      = $custom->deletecomma($request->unit_price);
        $product->promotion_price = $custom->deletecomma($request->promotion_price);
        if ($request->hasFile('imgproduct')){
            $fileImg              = $request->file('imgproduct');
            $nameImg              = $fileImg->getClientOriginalName();
            $imageProduct         = str_random(3)."_".$nameImg;
            $fileImg->move("page/image/product",$imageProduct);
            $product->image       = $imageProduct;
        }
        //$product->time_open       =  strtotime($request->timeopen);
        $product->unit            = $request->unit;
        $product->active          = 1;
        $product->save();
        $product_id               = $product->id;
        if ($request->hasFile('image')){
            $files = $request->file('image');
            foreach ($files as $file)
            {
                $nameimage  = $file->getClientOriginalName();
                $image      = str_random(3)."_".$nameimage;
                while (file_exists("page/image/product/".$image)) {
                    $image  = str_random(3)."_".$nameimage;
                }
                $file->move("page/image/product",$image);
                $now = Carbon::now();
                $listImages[] = [
                    'product_id' => $product_id,
                    'img_name'   => $image,
                    'created_at' => $now,
                    'updated_at' => $now,
                    ];
            }
            Images::insert($listImages);
        }
        return redirect('admin/product/add')->with('success','Thêm sản phẩm thành công');
    }
}