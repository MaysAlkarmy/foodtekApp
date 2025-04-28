<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return User::all();
    // }
   
    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //    $fields= $request->validate([
    //      'user_name'=> 'required',
    //      'email'=> 'required',
    //      'birth'=> 'required',
    //      'phone_number'=>'required',
    //      'password'=>'required'
    //     ]);
    //     $user= User::create($fields);

    //     return  $user;
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(User $user)
    // {
    //     return  $user;
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, User $user)
    // {
    //     $fields= $request->validate([
    //         'user_name'=> 'required',
    //         'email'=> 'required',
    //         'birth'=> 'required',
    //         'phone_number'=>'required',
    //         'password'=>'required'
    //        ]);
    //        $user->update($fields);
    //        return $user;
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(User $user)
    // {
    //     $user->delete();
    // return 'done';
    // }
}

