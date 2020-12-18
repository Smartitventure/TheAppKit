<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Buildapp;

class BuildappController extends Controller
{
    public function index()
    {
        $buildapp = Buildapp::get();
        $role = Role::get();
        return view("appkit.build_app")->with('buildapp', $buildapp)->with('role', $role);
    }
}
