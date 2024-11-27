<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function dashboard (){
        return view ('pages.admin.dashboard');
    }

    public function user (){
        return view ('pages.admin.user');
    }

    public function useredit (){
        return view ('pages.admin.user-edit');
    }

    public function newuser (){
        return view ('pages.admin.new-user');
    }

    public function addpackage (){
        return view ('pages.admin.add-package');
    }

    public function packageactive (){
        return view ('pages.admin.package-active');
    }

    public function packagepending (){
        return view ('pages.admin.package-pending');
    }

    public function packageexpired (){
        return view ('pages.admin.package-expired');
    }

    public function booking (){
        return view ('pages.admin.booking');
    }
    
    public function wishlist (){
        return view ('pages.admin.wishlist');
    }

    public function comment (){
        return view ('pages.admin.comment');
    }

    public function logout (){
        return view ('pages.admin.logout');
    }
}
