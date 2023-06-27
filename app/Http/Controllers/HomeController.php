<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\DB;

use App\Models\User;
use App\Models\Desklist;
use App\Models\deskupdate;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;




class HomeController extends Controller
{
    function login()
    {
        return view('login-page');
    }

    // function logout(){
    //     return view('logout');
    // }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email_address' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $user = User::where('email_address', '=', $request->email_address)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password does not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
        // $data= $request->input();
        // $request->session()->put('first_name', $data['first_name']);

        // echo session('first_name');
    }




    function contactsPage()
    {
        return view('contacts-page');
    }

    function studentListPage()
    {
        // return view('studentList-page');
        $data = array(
            'list2' => Student::all()
        );
        return view('studentlist-page', $data);
    }

    function deskListPage()
    {
        // return view('deskList-page');
        $data = array(
            'list' => Desklist::all()
        );
        return view('deskList-page', $data);
    }

    function assignDesk(Request $request)
    {
        $deskCode = $request->input('fetchDeskCodes');

        // Validate the input if needed

        // Select a student to update
        $student = Student::find($request->student_id);

        
        if ($student) {
            // Update the desk column of the selected student
            $student->desk = $deskCode;
            $student->save();

            // Return a response indicating the successful assignment
            return back()->with('success', 'Desk Assigned Successfully');
        } else {
            // Handle the case when no student is found
            return back()->with('error', 'No student found');
        }
    }

    public function getDeskCode()
    {
        $desks['data'] = DeskList::orderBy("desk_code", "asc")
            ->select('id', 'desk_code')
            ->get();

        return response()->json(['desks' => $desks]);
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

            $dsk->desk_code = $request->string;
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
    public function deskListPageAdd(Request $request)
    {
        $request->validate([
            'desk_code' => 'required',
            'desc' => 'required',
            'status' => 'required',
        ]);

        $dsk = new Desklist();
        $dsk->desk_code = $request->desk_code;
        $dsk->desc = $request->desc;
        $dsk->status = $request->status;
        $dsk->save();
        return back()->with('success');
    }

    function historyPage()
    {
        return view('history-page');
    }

    // //for display in users
    // function index(){
    function usersPage()
    {
        $data = array(
            'list' => DB::table('user')->get()
        );
        return view('users-page', $data);
    }

    function dashboardPage()
    {
        $users = User::all();

        return view('user.dashboard', ['users' => $users]);

        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));

        // return view('user.dashboard');
    }
}
