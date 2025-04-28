<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function bannerImage(){

        // $banner = Banner::all();
        $banner= DB::select('select image from banners');
        // return view('banner',compact('banner'));
         return response()->json($banner);
     }

}