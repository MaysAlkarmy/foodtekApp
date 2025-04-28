<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function createReview(Request $request){

     DB::insert('insert into reviews (user_id, item_id, rating, review  ) values (?,?,?,?)', 
     [$request->user_id,
                $request->item_id,
                $request->rating,
                $request->review
    ]);

    return response()->json('review created');
    }
}
