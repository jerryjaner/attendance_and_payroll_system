<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;
use App\Models\LeaveReq;
use App\Models\Overtime;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {

        $employees = Employee::where('user_id', auth()->user()->id)->first();
        $user = Auth::user();
        $employee = $user->employee;
        return view('account.index', compact('user', 'employee','employees'));
    }
    //update password
    public function update_password(Request $request)
    {
        $validator = \Validator::make($request -> all(),[
            'new_password' => 'required|min:8|max:20',
            'confirm_password' => 'required|same:new_password',
        ]);

        if($validator -> fails())
        {
            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        }
        else
        {

            $user_password = User::find($request -> usern_id);
            $user_password->password = Hash::make($request-> new_password);
            $user_password->update();
            return response()->json([
            'status' => 200,
            'msg' => 'Password Update Successfully',
            ]);
        }
    }
}
