<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SlideController extends BaseController
{
    public function getAddSlide(){
        return view('admin.slide.add');
    }
}
