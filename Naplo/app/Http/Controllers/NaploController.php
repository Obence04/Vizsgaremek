<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
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
            'temaoptions' => temak::all(),
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
            return redirect('/beallitasok');
        } else if ($request->input('tipus') == 'jelszo'){
            if (!Auth::attempt(['id' => Auth::user()->id, 'password' => $request->regi])){
                return redirect('/beallitasok')->withErrors(['msg' => 'Helytelen jelszó!']);
            }
            $request->validate([
                'regi' => 'required',
                'password' => ['required', 'confirmed', Password::min(8)->mixedcase()->numbers()],
                'password_confirmation' => 'required'
            ],[
                'regi.required' => 'Nem adta meg a jelszavát!',
                'password.required' => 'Nem adta meg az új jelszavát!',
                'password.min' => 'Új jelszava legalább 8 karakter hosszú legyen!',
                'password.mixedcase' => 'Az új jelszavának tartalmaznia kell kis- és nagybetűt!',
                'password.numbers' => 'Az új jelszavának tartalmaznia kell számot!',
                'password.confirmed' => 'A két jelszó nem egyezik',
                'password_confirmation.required' => 'Nem erősítette meg az jelszót!'
            ]);
            $data = User::find(Auth::user()->id);
            $data->password = Hash::make($request->password);
            $data->save();
            return redirect('/beallitasok')->withErrors([ 'msg' => 'Sikeres módosítás!' ]);
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
                    'jog' => $jog,
					'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes
                ]);
            } else if ($jog == 2){
                return view('fooldal',[
                    'user' => tanarok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
                    'jog' => $jog,
					'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes
                ]);
            } else {
                return view('fooldal',[
                    'user' => User::find(Auth::user()->id),
                    'jog' => $jog,
					'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes
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
                    'jog' => $jog,
					'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes
                ]);
            } else if ($jog == 2){
                return view('orarend',[
                    'user' => tanarok::where('felhasznalo_id', '=', User::find(Auth::user()->id)->id)->get()->first(),
                    'jog' => $jog,
					'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes
                ]);
            } else {
                return view('orarend',[
                    'user' => User::find(Auth::user()->id),
                    'jog' => $jog,
					'tema' => temak::find(beallitasok::find(Auth::user()->id)->tema_id)->megnevezes
                ]);
            }
        } else {
            return view('/belepes');
        }
    }
}
