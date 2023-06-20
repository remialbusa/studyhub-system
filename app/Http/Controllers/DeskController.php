<?php

namespace App\Http\Controllers;

use App\Models\Desklist;
use Illuminate\Http\Request;

class DeskController extends Controller
{

    public function deskView(){
        return view('deskListPage');
    }

    public function deleteDesk($id) {
        $dsk = Desklist::find($id);
        $dsk->delete();
        if(!$dsk){
            response()->json(['error' => 'user cannot be empty'], 402);
        }
        response()->json(['success', ['successful' => $dsk]], 200);
    }

    public function updateDesk(Request $request, $id) {
        $dsk = Desklist::findOrFail($id); // Assuming you have the user ID
        $dsk->id = $request->input('id');
        $dsk->desk_code = $request->input('desk_code');
        $dsk->desc = $request->input('desc');
        $dsk->status = $request->input('status');
        $dsk->save();
        if(!$dsk){
            response()->json(['error' => 'user cannot be empty'], 402);
        }
        /* response()->json(['success', ['successful' => $user]], 200); */
        return back()->with('success', 'You have now update successfully');
    }

    public function deskListPageAdd(Request $request) {
        $request->validate([
            'add_desk_code' => 'required|string',
            'add_desc' => 'required|string',
            'add_status' => 'required|string',
        ]);

        $dsk = new desklist();
        $dsk->desk_code = $request->add_desk_code;
        $dsk->desc = $request->add_desc;
        $dsk->status = $request->add_status;
        $res1 = $dsk->save();
        if($res1) {
            return redirect('/desk-list')-> with('success', 'New desk added successfully');
             // return redirect('dashboard')-> with('success', 'You have now registered successfully');
        } else {
            return back()-> with('fail', 'Something is wrong');
        }
 
    }
}