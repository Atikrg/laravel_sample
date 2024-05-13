<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    

    //list the users in php laravel
    public function index(){
        $users = UserModel::orderBy('id', 'DESC')->paginate(5);
        return view('users', ['users'=>$users]);
    }

    //delete the users in php laravel
    public function destroy($id, Request $request)
    {
        try {
            $user =  UserModel::findOrFail($id);
            $user->delete();

            
            return back()->with('success', "{$id} User deleted successfully");

        } catch (\Exception $e) {
            // Handle the exception, perhaps by redirecting back with an error message
            Session::flash('error', 'Failed to delete user: ' . $e->getMessage());
        }


    }


}
