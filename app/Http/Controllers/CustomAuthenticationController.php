<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomAuthenticationSystem;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CustomAuthenticationController extends Controller
{
    public function login()
    {    //function 1
        return view("login");
    }

    public function register()
    {     //function 2
        return view("register");
    }

    public function registeruser(Request $request)
    {     //function 3
        // form validation-register page
        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'username' => 'required|alpha|unique:customauthenticationsystem',
            'password' => 'required|min:8|same:confirmpassword',
            'confirmpassword' => 'required|min:8'
        ]);
        // store data into database
        $CustomAuthenticationSystem = new CustomAuthenticationSystem; //CustomAuthenticationSystem = model name
        $CustomAuthenticationSystem->firstname = $request->firstname;
        $CustomAuthenticationSystem->lastname = $request->lastname;
        $CustomAuthenticationSystem->gender = $request->gender;
        $CustomAuthenticationSystem->username = $request->username;
        $CustomAuthenticationSystem->password = Hash::make($request->password); //Hash::make() is use for secure your password
        $result = $CustomAuthenticationSystem->save();
        // after register instant login
        $CustomAuthenticationSystem = CustomAuthenticationSystem::where('username', '=', $request->username)->first();
        if ($CustomAuthenticationSystem) {
            Hash::check($request->password, $CustomAuthenticationSystem->password);
            $request->session()->put('loginId', $CustomAuthenticationSystem->id);
            return redirect('afterloginpage');
        } else {
            return "Something goes wrong";
        }

        // if($result){
        //     return back()->with('success','You have login successfully');
        // }else{
        //     return back()->with('fail', 'Something goes wrong');
        // }
    }

    public function loginuser(Request $request)
    {       //function 4
        // form validation-login page
        $request->validate([
            'username' => 'required|alpha',
            'password' => 'required|min:8'
        ]);

        $CustomAuthenticationSystem = CustomAuthenticationSystem::where('username', '=', $request->username)->first();
        if ($CustomAuthenticationSystem) {
            if (Hash::check($request->password, $CustomAuthenticationSystem->password)) {
                $request->session()->put('loginId', $CustomAuthenticationSystem->id);
                return redirect('afterloginpage');
            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This username is not registered');
        }
    }


    public function afterloginpage()
    {       //function 5
        $data = array();
        if (Session::has('loginId')) {
            $data = CustomAuthenticationSystem::where('id', '=', Session::get('loginId'))->first();
        }
        return view('afterloginpage', ['data' => $data]);
    }


    public function logout()
    {       //function 6
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect()->route('index');
        }
    }

    public function edituser($id)
    {
        $data = CustomAuthenticationSystem::find($id);
        return view('edituser', ['data' => $data]);
    }


    public function updateuser($id, Request $request)
    {
        $data = CustomAuthenticationSystem::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->gender = $request->gender;
        $data->username = $request->username;
        $data->save();
        return redirect(route('edituser', ['id' => $id]))->with('success', 'User edited successfully');
    }
}
