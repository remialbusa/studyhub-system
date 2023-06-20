<?php

namespace App\Http\Controllers;

use DB;
// use App\Http\Controllers\DB;

use App\Models\User;
use App\Models\Desklist;
use App\Models\deskupdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    function login(){
        return view('login-page');
    }

    // function logout(){
    //     return view('logout');
    // }

    public function loginUser(Request $request) {
        $request->validate([
            'email_address' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $user = User::where('email_address' , '=' , $request->email_address)->first();
        if ($user) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                    return back()-> with('fail', 'Password does not match.');
                }
            } else {
            return back()-> with('fail', 'This email is not registered.');
        } 
        // $data= $request->input();
        // $request->session()->put('first_name', $data['first_name']);
        
        // echo session('first_name');
    } 



    
    function contactsPage(){
        return view('contacts-page');
    }

    function studentListPage(){
        // return view('studentList-page');
        $data = array(
        'list2' => DB::table('assign_list')->get()
        );
        return view('studentlist-page', $data);
    }

    function deskListPage(){
        // return view('deskList-page');
        $data = array(
            'list' => DB::table('desk_list')->get()
        );
        return view('deskList-page', $data);
    }


    // FIX HEREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
    #update 
    public function deskListPageUpdate($id, Request $request)
    {
        try {
            $request->validate([
                'desk_code' => 'string',
                'desc' => 'string',
                'status' => 'string',
                'date' => 'string', 
            ]);

            $dsk = desklist::where('id', $id)->first();

            $dsk->desk_code= $request->string;
            $dsk->desc = $request->string;
            $dsk->status = $request->string;
            $dsk->created_at = $request->string;
 
            $dsk->save();

            return response([
                'message' => 'success',
                'deskList' => $dsk,
            ]);
        } catch (Throwable $error) {
            return response([
                'message' => $error,
            ]);
        }
    }

    #add
    #FIX DESK MODEL
    public function deskListPageAdd(Request $request) {
        $request->validate([
            'desc_code' => 'required|string',
            'desc' => 'required|string',
            'status' => 'required|string',
        ]);

        $dsk = new desklist();
        $dsk->desc_code = $request->username;
        $dsk->desc = $request->email_address;
        $dsk->status = $request->first_name;
        $res1 = $dsk->save();
        if($res1) {
            return redirect('/desk_list')->with('success', 'New desk added successfully');
             // return redirect('dashboard')-> with('success', 'You have now registered successfully');
        } else {
            return back()->with('fail', 'Something is wrong');
        }
 
    }

    function historyPage(){
        return view('history-page');
    }

    // //for display in users
    // function index(){
    function usersPage(){
        $data = array(
            'list' => DB::table('user')->get()
        );
        return view('users-page', $data);
    }

    function dashboardPage(){
        $users = User::all();
        
        return view('user.dashboard', ['users' => $users]);

            $data = array();    
            if(Session::has('loginId')) {
                $data = User::where('id', '=', Session::get('loginId'))->first();
            }
            return view('dashboard', compact('data'));

            // return view('user.dashboard');
    }
}
