<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        if(!$user){
            response()->json(['error' => 'user cannot be empty'], 402);
        }
        response()->json(['success', ['successful' => $user]], 200);
    }

    public function updateUser(Request $request, $id) {
        $user = User::findOrFail($id); // Assuming you have the user ID
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->save();
        if(!$user){
            response()->json(['error' => 'user cannot be empty'], 402);
        }
        /* response()->json(['success', ['successful' => $user]], 200); */
        return back()->with('success', 'You have now update successfully');
    }
}
