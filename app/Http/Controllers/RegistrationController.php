<?php

namespace App\Http\Controllers;

use App\Models\Desklist;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function registerView(){
        return view('user.registration');
    }

    public function registerUser(Request $request) {
        $request->validate([
            'username' => 'required|string',
            'email_address' => 'required|string|email|unique:user',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'phone_number' => 'required|numeric|min:11',
            'password' => 'required|string',
            'r_password' => 'required|string',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email_address = $request->email_address;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->r_password = Hash::make($request->r_password);
        $res = $user->save();
        if($res) {
            return back()-> with('success', 'You have now registered successfully');
            // return redirect('dashboard')-> with('success', 'You have now registered successfully');
        } else {
            return back()-> with('fail', 'Something is wrong');
        }
        echo $request->password;
        // echo "test";

        // $user = DB::table('user')->insert([
        //     'username' => $request->username,
        //     'email_address' => $request->email_address,
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'address' => $request->address,
        //     'gender' => $request->gender,
        //     'phone_number' => $request->phone_number,
        //     'password' => Hash::make($request->password),
        //     // 'password' => $request->password,
        //     'r_password' => Hash::make($request->password),
        // ]);
        
        // if($user) {
        //     return back()-> with('success', 'You have now registered successfully');
        // } else {
        //     return back()-> with('fail', 'Something is wrong');
        // }
        // echo $request->password;
    }

     #SHOW COUNT ONLY
     function dashboard()
     {
         $userCount = User::count();
         $desklistAvail = Desklist::count();
         $countDeskOccu = Desklist::count();
        //  $desklistAvail = Desklist::where('status','0')->count();
        //  $countDeskOccu = Desklist::where('status','1')->count();
         
         return view('user.dashboard', compact('userCount', 'desklistAvail', 'countDeskOccu'));
     }
     
}
