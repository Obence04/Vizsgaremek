<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

use App\Models\diak;
use App\Models\ertekeles;
use App\Models\ertidopont;
use App\Models\erttipus;
use App\Models\igazolas;
use App\Models\hianyzas;
use App\Models\ora;
use App\Models\osztaly;
use App\Models\tanar;
use App\Models\tanitott;
use App\Models\tantargy;
use App\Models\tema;
use App\Models\User;

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
            'user' => diak::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
            'jog' => $jog,
            'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
            'temaoptions' => tema::all(),
        ]);
        } else if ($jog == 2){
        return view('beallitasok',[
            'user' => tanar::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
            'jog' => $jog,
            'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
            'temaoptions' => tema::all()
        ]);
        } else {
        return view('beallitasok',[
            'user' => User::find(Auth::id()),
            'jog' => $jog,
            'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
            'temaoptions' => tema::all()
        ]);
        }
    }

    public function Belepett(){
        return Auth::check();
    }

    public function BeallitasokPost(Request $request){
        if ($request->input('tipus') == 'tema'){
            $data = User::find(Auth::id());
            $data->tema_id = $request->tema;
            $data->save();
            return redirect('/beallitasok');
        } else if ($request->input('tipus') == 'jelszo'){
            if (!Auth::attempt(['fel_id' => Auth::id(), 'fel_jelszo' => $request->regi])){
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
            $data = User::find(Auth::id());
            $data->fel_jelszo = Hash::make($request->password);
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
        //dd(Auth::user());
        if (Auth::check()){
            $user = User::find(Auth::id());
            $jog = $user->jog_id;
            if ($jog == 1){
                return view('fooldal',[
                    'user' => diak::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                ]);
            } else if ($jog == 2){
                return view('fooldal',[
                    'user' => tanar::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                ]);
            } else {
                return view('fooldal',[
                    'user' => User::find(Auth::id()),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                ]);
            }
        } else {
            return view('/belepes');
        }
    }

    public function Belepes(){

        if (Auth::guest()){
            return view('belepes');
        }
        return redirect('/');
    }

    public function BelepesPost(Request $request){
        /*
        $data = new User;
        $data->fel_nev = 'Admin';
        $data->fel_email = 'admin@admin.hu';
        $data->fel_jelszo = hash::make('Admin');
        $data->jog_id = 4;
        $data->save();
        */
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Üresen hagyta a felhasználónév mezőt!',
            'password.required' => 'Üresen hagyta a jelszó mezőt!'
        ]);
        $can = hash::check($request->password, User::Where('fel_nev','=',$request->username)->first()->fel_jelszo);
        if ($can) {
            Auth::loginUsingId(User::Where('fel_nev','=',$request->username)->first()->fel_id,false);
        //dd($request->password);
        //if (Auth::attempt(['fel_nev' => $request->username, 'fel_jelszo' => $request->password])){
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
                    'user' => diak::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                    'osztaly' => osztaly::find(diak::where('fel_id','=',Auth::id())->first()->oszt_id)->oszt_nev,
                    'orak' => ora::where('oszt_id','=',diak::where('fel_id','=',User::find(Auth::id())->fel_id)->first()->oszt_id)->orderby('ora_datum')->orderby('ora_szam')->get()
                ]);
            } else {
                return view('orarend',[
                    'user' => tanar::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                    'orak' => ora::join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->join('tanarok','tanarok.tanar_id','tanitott.tanar_id')->where('tanarok.fel_id','=',User::find(Auth::id())->fel_id)->orderby('ora_datum')->orderby('ora_szam')->get()
                ]);
            }
        } else {
            return view('/belepes');
        }
    }

    public function Ertekelesek(){
        if (Auth::check()){
            $user = Auth::user();
            $jog = $user->jog_id;
            if ($jog == 1){
                return view('ertekelesek',[
                    'user' => diak::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                ]);
            } else if ($jog == 2){
                return view('ertekelesek',[
                    'user' => tanar::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog' => $jog,
                    'tema' => tema::find(User::find(Auth::id())->tema_id)->tema_nev,
                    'orak' => ora::join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('osztalyok','osztalyok.oszt_id','orak.oszt_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->join('tanarok','tanarok.tanar_id','tanitott.tanar_id')->where('tanarok.fel_id','=',User::find(Auth::id())->fel_id)->orderby('orak.oszt_id')->orderby('ora_datum')->orderby('ora_szam')->get()
                ]);
            }
        } else {
            return view('/belepes');
        }
    }
}
