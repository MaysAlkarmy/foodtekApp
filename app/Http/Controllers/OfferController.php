<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
   public function createOffer(Request $request){
  
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'discount_percentage' => 'required|numeric|between:0,100',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    try {
        DB::insert('insert into offers (name, description, discount_percentage, start_date, end_date ) 
        values (?,?,?,?,?)', [
            $request->name,
            $request->description,
            $request->discount_percentage,
            $request->start_date,
            $request->end_date
        ]);
        return response()->json(['message' => 'Offer created successfully'], 201);

   } 
   catch (\Exception $e) {
    return response()->json([
        'message' => 'Failed to create offer',
        'error' => $e->getMessage()
    ], 500);
}

   } 

   public function updateOffer(Request $request, $id){
  
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'discount_percentage' => 'required|numeric|between:0,100',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    try {
        DB::update('update offers (name, description, discount_percentage, start_date, end_date ) 
        values (?,?,?,?,?) where id = ? ', [
            $request->name,
            $request->description,
            $request->discount_percentage,
            $request->start_date,
            $request->end_date,
            $id
        ]);
        return response()->json(['message' => 'Offer updated successfully'], 201);

   } 
   catch (\Exception $e) {
    return response()->json([
        'message' => 'Failed to create offer',
        'error' => $e->getMessage()
    ], 500);
}

   } 

 }