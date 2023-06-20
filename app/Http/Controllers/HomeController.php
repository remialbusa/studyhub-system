<?php

namespace App\Http\Controllers;

use DB;
// use App\Http\Controllers\DB;
use Hash;
use Session;
use App\Models\User;
use App\Models\Desklist;
// use App\Models\deskupdate;
use App\Models\Assignlist;
use Illuminate\Http\Request;

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

    function landingPage(){
        return view('landing-page');
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

    public function studentListAdd(Request $request) {
        $request->validate([
            // 'add_id' => 'required|string',
            'add_student_id' => 'required|string',
            'add_desk_id' => 'required|string',
            'add_remarks' => 'required|string',
            'add_status' => 'required|string',
            // 'add_desk_number' => 'required|string',
        ]);

        $data = new Assignlist();
        $data->student_id = $request->add_student_id;
        $data->desk_id = $request->add_desk_id;
        $data->remarks = $request->add_remarks;
        $data->status = $request->add_status;
        // $data->desk_number = $request->add_desk_number;
        $res1 = $data->save();
        if($res1) {
            return redirect('/student-list')-> with('success', 'New desk added successfully');
        } else {
            return back()-> with('fail', 'Something is wrong');
        }

    }

    public function studentListUpdate(Request $request, $id) {
        $data = Assignlist::findOrFail($id); // Assuming you have the user ID
        // $data->id = $request->input('id');
        $data->student_id = $request->input('student_id');
        $data->desk_id = $request->input('desk_id');
        $data->remarks = $request->input('remarks');
        $data->status = $request->input('status');
        $data->save();
        if(!$data){
            response()->json(['error' => 'user cannot be empty'], 402);
        }
        /* response()->json(['success', ['successful' => $user]], 200); */
        return back()->with('success', 'You have now update successfully');
    }

    public function studentListDelete($id) {
        $data = Assignlist::find($id);
        $data->delete();
        if(!$data){
            response()->json(['error' => 'user cannot be empty'], 402);
        }
        response()->json(['success', ['successful' => $data]], 200);
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

    // public function registerDelete($id)
    // {
    //     $record = User::find($id);
        
    //     if (!$record) {
    //         // Handle case when record does not exist
    //     }
    
    //     $record->delete();
    
    //     // Redirect or return a response indicating successful deletion
    // }
    
}
