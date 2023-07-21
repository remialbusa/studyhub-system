<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('username', 'password'))) {
            return redirect('/')->with('fail', 'Incorrect email or password');
        }

        return redirect('/dashboard')->with('success', 'Login Successfuly');
    }

    function registerAdmin(Request $request)
    {
        //validate info
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        //insert data
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return back()->with('success', 'Registration complete');
    }

    function registerStudent(Request $request)
    {
        //validate info
        $request->validate([
            'id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
        ]);

        //insert data
        $student = new Student();
        $student->id = $request->id;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email_address = $request->email_address;
        $student->phone_no = $request->phone_no;
        $student->address = $request->address;
        $student->save();
        return back()->with('success', 'Registration complete');
    }
    function updateStudent(Request $request)
    {
        //validate info
        $request->validate([
            'id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
        ]);

        //insert data
        $student = new Student();
        $student->id = $request->id;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email_address = $request->email_address;
        $student->phone_no = $request->phone_no;
        $student->address = $request->address;
        $student->save();
        return back()->with('success', 'Registration complete');
    }
    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('success', 'Student deleted successfully');
    }


    function logout()
    {

        Auth::logout();
        return redirect('/')->with('success', 'Logout Successfully');
    }
}
