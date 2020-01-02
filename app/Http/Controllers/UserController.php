<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){

        $date = Carbon::now()->addDays()->diffForHumans();
        return view('user.index',compact('date'));
    }
}
