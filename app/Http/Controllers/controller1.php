<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;


class controller1 extends Controller
{
 
    public function storecontact(Request $requests)
    {
        $obj = new employee();
        $obj->name = $requests->name;
        $obj->email=$requests->email;
        $obj->password=$requests->password;


        $obj->save();
        echo $requests->name;
        echo $requests->email;
        echo $requests->password;

    }

    public function home()
    {
        return view('pages.home');

    }

    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contactus');
    }
    
}
