<?php

namespace App\Http\Controllers\Admin\CRM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view("admin.pages.crm.dashboard");
    }

    public function calendar(){
        return view("admin.pages.crm.calendar");
    }
    public function mail(){
        return view("admin.pages.crm.mail");
    }
    
}