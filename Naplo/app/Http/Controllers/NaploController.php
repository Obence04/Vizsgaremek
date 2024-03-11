<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\Models\User;
use App\Models\diakok;
use App\Models\orarend;
use App\Models\osztalyok;
use App\Models\tanarok;
use App\Models\tanitott;
use App\Models\tantargyak;

class NaploController extends Controller
{
    public function Kilepes(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect('/belepes');
    }


    public function Fooldal(){
        if (Auth::check()){

                
            if (Auth::user()->jog_id == 1){
                return view('fooldal',[
                    'user' => diakok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()[0]
                ]);
            } else {
                return view('fooldal',[
                    'user' => tanarok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()[0]
                ]);
            }
        } else {
            return view('/belepes');
        }
    }

    public function Belepes(){
        return view('belepes');
    }

    public function BelepesPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Üresen hagyta a felhasználónév mezőt!',
            'password.required' => 'Üresen hagyta a jelszó mezőt!'
        ]);
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])){
            return redirect('/fooldal');
        } else {
            $msg = "Helytelen felhasználónév vagy jelszó!";
            return redirect('/belepes')->withErrors(['msg' => $msg]);
        }
    }
}
