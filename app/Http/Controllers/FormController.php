<?php

namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function signup(){
        return view('form.signup');
    }

    public function login(){
        return view('form.login');
    }

    public function submit(Request $req){

        if (!is_dir(public_path('form/img/profile'))) {
            mkdir(public_path('form/img/profile'), 0777, true);
        }

        $imagePath = null;

        if ($req->img) {
            $image = $req->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'form/img/profile/' . $imageName;

            $image->move(public_path('form/img/profile'), $imageName);
            $data['img'] = $imagePath;
        }
        

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;
        $data['password'] = $req->password;
        User::create($data);

        Alert::success('success', 'Account created successfully');

        return redirect()->route('login');

    }

    public function loginCheck(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {

            if (Auth::user()->is_admin == 1) {

                Alert::success('Success', 'Admin login successfully');

                return redirect()->route('admin');
            } else {
                Alert::success('Success','You are login successfully');

                return redirect()->route('home');
            }
        } else {
            Alert::error('Oops!','Email or Password is incorrect');

            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        Alert::success('Success', 'You are logout successfully');

        return redirect()->route('home');
    }
}
