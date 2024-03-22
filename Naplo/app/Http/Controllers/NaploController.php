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
use App\Models\temak;
use App\Models\beallitasok;

class NaploController extends Controller
{
    public function Jogok(){

    }

    public function VendegAtiranyit(){
        if (Auth::guest()) return view('/belepes');
    }

    public function Beallitasok(){
        if (!self::Belepett()) return redirect('/belepes');
        $user = Auth::user();
        $jog = $user->jog_id;
        if ($jog == 1){
        return view('beallitasok',[
            'user' => diakok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
            'jog' => $jog,
            'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes,
            'temaoptions' => temak::all()
        ]);
        } else if ($jog == 2){
        return view('beallitasok',[
            'user' => tanarok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
            'jog' => $jog,
            'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes,
            'temaoptions' => temak::all()
        ]);
        } else {
        return view('beallitasok',[
            'user' => User::find(Auth::user()->id),
            'jog' => $jog,
            'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes,
            'temaoptions' => temak::all()
        ]);
        }
    }

    public function Belepett(){
        return Auth::check();
    }

    public function BeallitasokPost(Request $request){
        if ($request->input('tipus') == 'tema'){
            $data = beallitasok::find(Auth::user()->id);
            $data->tema_id = $request->tema;
            $data->save();
        }
        return redirect('/beallitasok');
    }

    public function Kilepes(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect('/belepes');
    }


    public function Fooldal(){
        if (Auth::check()){
            $user = Auth::user();
            $jog = $user->jog_id;
            if ($jog == 1){
                return view('fooldal',[
                    'user' => diakok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
                    'jog' => $jog
                ]);
            } else if ($jog == 2){
                return view('fooldal',[
                    'user' => tanarok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
                    'jog' => $jog
                ]);
            } else {
                return view('fooldal',[
                    'user' => User::find(Auth::user()->id),
                    'jog' => $jog
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
            return redirect('/');
        } else {
            $msg = "Helytelen felhasználónév vagy jelszó!";
            return redirect('/belepes')->withErrors(['msg' => $msg]);
        }
    }

    public function Orarend(){
        if (Auth::check()){
            $user = Auth::user();
            $jog = $user->jog_id;
            if ($jog == 1){
                return view('orarend',[
                    'user' => diakok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
                    'jog' => $jog
                ]);
            } else if ($jog == 2){
                return view('orarend',[
                    'user' => tanarok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
                    'jog' => $jog
                ]);
            } else {
                return view('orarend',[
                    'user' => User::find(Auth::user()->id),
                    'jog' => $jog
                ]);
            }
        } else {
            return view('/belepes');
        }
    }
}
