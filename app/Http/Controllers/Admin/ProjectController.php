<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function masterview(){
        return view("admin.masterview");
    }

    public function projectDashboard(){
        return view("admin.pages.dashboard.dashboard");
    }
    public function projectList(){
        return view("admin.pages.dashboard.projectList");
    }
    public function scrumBoard(){
        return view("admin.pages.dashboard.scrumBoard");
    }

    public function issue(){
        return view("admin.pages.dashboard.issue");
    }
}