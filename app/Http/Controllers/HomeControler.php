<?php

namespace App\Http\Controllers;

use App\Models\DataTamu;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
        return view('home',[
            'listTamu' => DataTamu::all(),
        ]);
    }
}
