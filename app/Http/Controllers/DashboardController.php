<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($id){
        $this->data['user'] = User::find($id);
        return view('dashboard.index', $this->data);
    }
}
