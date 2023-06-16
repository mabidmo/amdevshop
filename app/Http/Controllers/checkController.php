<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\User;
use App\Models\check;
use Illuminate\Http\Request;

class checkController extends Controller
{
    public function index(){
        // dd('Berhasil');
        $check = buy::all();
        return view('checkInvoice', ['check'=>$check]);
    }
}
