<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ShareController extends Controller
{
    public function news(){
        return view('fronend.pages.latest_news');
    }

    public function share_data(Request $req)
    {
        if (Auth::Check()) {

            $data['message'] = $req->message;
            $data['name'] = $req->name;
            $data['email'] = $req->email;
            $data['subject'] = $req->subject;

            Share::create($data);

            Alert::success('Success', 'Thank you for sharing information');

            return redirect()->back();
        } else {
            Alert::error('Opps!', 'Please log in to your account first');

            return redirect()->route('login');
        }
    }


    // admin

    public function getTounch(){
        $data=Share::get();

        return view('admin.pages.share',['share'=> $data]);

    }




    
}
