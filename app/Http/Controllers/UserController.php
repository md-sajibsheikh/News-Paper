<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User()
    {

        $data = User::where('is_admin', 0)->get();
        return view('admin.pages.user', ['user' => $data]);
    }


    public function all_admin()
    {

        $data = User::where('is_admin', 1)->get();
        return view('admin.pages.admin', ['user' => $data]);
    }
}
