<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function getItemById(Request $request)
    {
      //$menu = Menu::all();
      $menu = DB::select('select * from items where id = ?', [$request->id]);
        return response()->json($menu);
      
    }

    public function getMainCategory(Request $request){

        //$menu= Menu::select('image', 'main_category')->distinct()->get();
        $menu= DB::select('select distinct image, main_category from items ');
        return response()->json($menu);
      
  }

    public function getItemsByCategory(Request $request){

      // $menu= Menu::all('main_category');
         $menu= DB::select('select image, main_category from items where main_category = ?', [$request->main_category]);
         return response()->json($menu);
       

    }

    public function topRated(){

      $menu= Menu::where('rating', '>', '3.5')->get();
       // $menu= DB::select('select * from items where ');
      return response()->json($menu);
      
  }

  public function recommendedItems(){

    $menu= Menu::where('rating', '>', '3.5')->get();
    return response()->json($menu);
    
}


    public function createItem (Request $request){

      try {
        DB::insert('insert into items (name, price, description, image, main_category) values (?,?,?,?)', [
            $request->name,
            $request->price,
            $request->description,
            $request->image,
            $request->main_category
        ]);

        return response()->json(['message' => 'Item created successfully']);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Failed to create item',
            'error' => $e->getMessage()
        ], 500);
    }

    }
}
