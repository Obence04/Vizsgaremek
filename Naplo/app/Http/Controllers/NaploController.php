<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\Models\User;

class NaploController extends Controller
{

    public function Belepes(){
        return view('belepes');
    }

    public function BelepesPost(Request $request){
        $request->validate([
            ''
        ],[

        ])
    }
}
