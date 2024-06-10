<?php

namespace App\Http\Controllers;

use App\Models\DataTamu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
        $today = Carbon::today();
        return view('home', [
            'listTamu' => DataTamu::whereDate('created_at', $today)->get()
        ]);
    }
}
