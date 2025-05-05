<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function addNotification(Request $request){
 
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string',
            'message' => 'required|string',
        ]);
        DB::table('notifications')->insert([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'message' => $request->message
        ]);
        return response()->json(['message' => 'Notification added successfully'], 201);


    }

    public function getNotification(Request $request){

        $notification = DB::table('notifications')
        ->where('user_id', $request->user_id)
        ->get();
        return response()->json($notification);
    }
}
