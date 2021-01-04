<?php

namespace App\Http\Controllers\backend\dashboardAdmin;

use Illuminate\Http\Request;
use App\Http\Models\dataUsers;
use App\Http\Controllers\Controller;

class dasboardAdminController extends Controller
{
    public function index () {
        $users = dataUsers::all();
        return view('backend.dasboardAdmin.dasboard-admin', compact('users'));
    }
}
