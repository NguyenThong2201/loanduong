<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends BaseController
{
    public function getAddSlide(){
        return view('admin.slide.add');
    }
    public function postAddSlide(Request $request){
        $slide = new Slide;
        $slide->title 		= $request->title;
        $slide->description = $request->description;
        if ($request->hasFile('image')){
            $fileImg              = $request->file('image');
            $nameImg              = $fileImg->getClientOriginalName();
            $imageSlide           = str_random(3)."_".$nameImg;
            $fileImg->move("page/image",$imageSlide);
            $slide->image       = $imageSlide;
        }
        $slide->save();
        return redirect('admin/slide/add')->with('success','Thêm slide thành công');
    }
}
