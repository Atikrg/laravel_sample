<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function viewUsers()
    {
        return view('users');
    }

    //list the users in php laravel
    public function index()
    {
        $users = UserModel::orderBy('id', 'DESC')->paginate(5);
        return view('users', ['users' => $users]);
    }

    //create a user
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            "full_name" => 'required',
            "email" => 'required',
            "number" => 'required',
            "password" => 'required'
        ]);

        if ($validator->passes()) {
            // Validation passed, proceed with saving data
            

            /* $existingUser1 = UserModel::where('id', $request->id)->exists(); */
            /*  dd($existingUser1); */

            
            $users = new UserModel();
            $users->full_name = $request->full_name;
            $users->email = $request->email;
            $users->number = $request->number;
            $users->password = $request->password;


            // ID does not exist, save the user
            $users->save();
            Session::flash('success', 'User created successfully');


            return back();
        } else {
            // Validation failed, return with errors
            return redirect()->route('users.index')->withErrors($validator)->withInput();
        }
    }


    //delete the users in php laravel
    public function destroy($id, Request $request)
    {
        try {
            $user =  UserModel::findOrFail($id);
            $user->delete();


            return back()->with('success', " User with ID-{$id} is  deleted successfully from the system");
        } catch (\Exception $e) {
            // Handle the exception, perhaps by redirecting back with an error message
            Session::flash('error', 'Failed to delete user: ' . $e->getMessage());
        }
    }

    public function edit($id, Request $request)
    {
        $User = UserModel::findOrFail($id);
        $userid = $request->id;
        if ($User === $userid) {
            Session::flash("success", "Id found");
        }
    }
}
