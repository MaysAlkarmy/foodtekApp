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
        DB::table('items')
        ->update(['isfavourite' => 1]);
        return response()->json(['message' => 'Added to favourites']);
    }

    public function getUserFavourite(Request $request){
    $user_fav= DB::table('favourites')->where('user_id', $request->user_id)->get();
    return response()->json($user_fav);

    }

    public function deleteUserFavourite(Request $request){
    
    //  DB::table('favourites')->where('user_id', $request->user_id)->delete(); 
        DB::table('favourites')
        ->where('user_id', $request->user_id)
        ->where('item_id', $request->item_id)
        ->delete();
     return response()->json(['message' => 'delete from favourites']);
    
    }
}
