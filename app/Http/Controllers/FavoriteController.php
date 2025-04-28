<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function addToFavourites(Request $request)
    {
        DB::table('favourites')->insert([
            'user_id' => $request->user_id, 
            'item_id' => $request->item_id
           
        ]);
        return response()->json(['message' => 'Added to favourites']);
    }

    public function getUserFavourite(){


    }

    public function deleteUserFavourite(Request $request){
    
     DB::table('favourites')->where('user_id', $request->user_id)->delete(); 
     return response()->json(['message' => 'delete from favourites']);
    
    }
}
