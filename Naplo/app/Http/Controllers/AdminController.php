<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diak;
use App\Models\ora;
use App\Models\osztaly;
use App\Models\tanar;
use App\Models\tanitott;
use App\Models\tantargy;
use App\Models\User;
use App\Models\beallitas;
use App\Models\tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function Profil($id){
        if (Auth::check()) {
            $user = Auth::user();
            $jog = $user->jog_id;
            if ($jog > 2) {
                return view('profil',[
                    'user' => User::find($id),
                    'diak' => diak::where('fel_id','=',$id)->get()->first(),
                    'tanar' => tanar::where('fel_id','=',$id)->get()->first(),
                    'id' => $id,
                    'jog' => $jog,
                    'tema' => tema::find($user->tema_id)->tema_nev
                ]);
            } else {
                return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);
            }
        } else {
            return redirect('/belepes');
        }
    }

    public function ProfilPost(Request $request, $id){
        if (Auth::check()){
            if (Auth::user()->jog_id > 2) {
                if (User::find($id)->jog_id == 1) {
                    $request->validate([
                        'dnev' => 'required',
                        'dszulido' => 'required',
                        'dszulhely' => 'required',
                        'danyja' => 'required'
                    ],[
                        'dnev.required' => 'Név megadása kötelező!',
                        'dszulido.required' => 'Születési dátum megadása kötelező!',
                        'dszulhely.required' => 'Születési hely megadása kötelező!',
                        'danyja.required' => 'Név megadása kötelező!',
                    ]);
                    $data = diak::where('fel_id','=',$id)->get()->first();
                    $data->diak_nev = $request->dnev;
                    $data->diak_szuldatum = $request->dszulido;
                    $data->diak_szulhely = $request->dszulhely;
                    $data->diak_anyja = $request->danyja;
                    if (!is_null($request->dlakcim)) {
                        $data->diak_lakcim = $request->dlakcim;
                    } else {
                        $data->diak_lakcim = null;
                    }
                    $data->save();
                }
                $request->validate([
                    'fnev' => 'required',
                    'femail' => 'required'
                ],[
                    'fnev.required' => 'Felhasználónév megadása kötelező!',
                    'femail.required' => 'E-mail cím megadása kötelező!'
                ]);
                $data = User::find($id);
                $data->fel_nev = $request->fnev;
                $data->fel_email = $request->femail;
                if (!is_null($request->ftel)) {
                    $data->fel_telszam = $request->ftel;
                } else {
                    $data->fel_telszam = null;
                }
                $data->save();
                return redirect('/profil/'.$id);
            } else {
                if(isset($request->dlakcim)){
                    $data = diak::where('fel_id','=',Auth::id())->get()->first();
                    if (!is_null($request->dlakcim)) {
                        $data->diak_lakcim = $request->dlakcim;
                    } else {
                        $data->diak_lakcim = null;
                    }
                    $data->save();
                }
                $request->validate([
                    'femail' => 'required'
                ],[
                    'femail.required' => 'E-mail cím megadása kötelező!'
                ]);
                $data = User::find(Auth::id());
                $data->fel_email = $request->femail;
                if (!is_null($request->ftel)) {
                    $data->fel_telszam = $request->ftel;
                } else {
                    $data->fel_telszam = null;
                }
                $data->save();
                return redirect('/profil');
            }

        } else {
            return redirect('/belepes');
        }
    }

    public function Visszaallit($id){
        if (Auth::check()){
            if (Auth::user()->jog_id > 3){
                return view('profil',[
                    'user' => Auth::user(),
                    'mod' => User::find($id),
                    'jog' => Auth::user()->jog_id,
                    'tema' => tema::find(Auth::user()->tema_id)->tema_nev
                ]);
            } else {
                return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);
            }
        } else {
            return redirect('/belepes');
        }
    }

    public function VisszaallitPost(Request $request, $id){
        if (Auth::check()){
            if (Auth::user()->jog_id > 3){
                $data = User::find($id);
                $data->fel_jelszo = hash::make('RKT-'.$data->fel_email.'-123');
                $data->save();
                return redirect('/profil/'.$id);
            } else {
                return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);
            }
        } else {
            return redirect('/belepes');
        }
    }

    public function ProfilKeres(){
        if (Auth::check()){
            if (Auth::user()->jog_id > 2){
                return view('profilkeres',[
                    'user' => Auth::user(),
                    'jog' => Auth::user()->jog_id,
                    'tema' => tema::find(Auth::user()->tema_id)->tema_nev
                ]);
            } else {
                return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);
            }
        } else {
            return redirect('/belepes');
        }
    }

    public function ProfilKeresPost(Request $request){
        if (Auth::check()){
            if (Auth::user()->jog_id > 2){
                $request->validate([
                    'keres' => 'required'
                ]);
                $talalat = -1;
                switch($request->opcio) {
                    case 'nev':
                        $talalat = User::whereraw('fel_nev LIKE \'%'.$request->keres.'%\'')->get();
                        break;
                    case 'email':
                        $talalat = User::whereraw('fel_email LIKE \'%'.$request->keres.'%\'')->get();
                        break;
                    default:
                        break;
                }

                return view('profilkeres',[
                    'user' => Auth::user(),
                    'jog' => Auth::user()->jog_id,
                    'tema' => tema::find(Auth::user()->tema_id)->tema_nev,

                    'talalatok' => $talalat
                ]);
            } else {
                return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);
            }
        } else {
            return redirect('/belepes');
        }
    }

    function Felvetel(){
        if (Auth::check()){
            if (Auth::user()->jog_id > 2){
                return view('felvetel',[
                    'user'          => tanar::where('fel_id', '=', User::find(Auth::id())->fel_id)->get()->first(),
                    'jog'           => User::find(Auth::user()->fel_id)->jog_id,
                    'tanardb'       => tanar::count(),
                    'tanarok'       => tanar::all(),

                    'osztalydb'     => osztaly::count(),
                    'osztalyok'     => osztaly::all(),

                    'tantargydb'    => tantargy::count(),
                    'tantargyak'    => tantargy::all(),

                    'ttanar'       => tanitott::select('tanitott.tanit_id', 'tanarok.tanar_nev', 'tantargyak.tant_nev')->join('tanarok','tanarok.tanar_id','tanitott.tanar_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->get(),

                    'tema' => tema::find(User::find(Auth::user()->fel_id)->tema_id)->tema_nev,
                ]);
            }
        }
        return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);

    }

    function FelvetelPost(Request $request){
        if ($request->input('tipus') == "osztály") {
            $request->validate([
                'osztalynev' => 'required',
                'osztalyfonok_id' => 'unique:osztalyok,tanar_id'
            ],[
                'osztalynev.required' => 'Nem adott meg nevet!',
                'osztalyfonok_id.unique' => 'Ez a tanár már más osztálynak az osztályfőnöke!'
            ]);
            $data = new osztaly;
            $data->oszt_nev = $request->osztalynev;
            $data->tanar_id = $request->osztalyfonok_id;
            $data->save();
        }
        else if ($request->input('tipus') == "tanuló"){
            $request->validate([
                'tanulonev' => 'required',
                'oktazon' => 'unique:diakok,diak_id',
                'osztaly' => 'required',
                'szuldatum' => 'required',
                'szulhely' => 'required',
                'anyjaneve' => 'required',
                'lakcim' => 'required',
                'email' => 'required'
            ],[
                'tanulonev.required' => 'Nem adott meg nevet!',
                'oktazon.unique' => 'Ez az oktatási azonosító már benne van az adatbázisban!',
                'osztaly.required' => 'Nem adta meg az osztályt!',
                'szuldatum.required' => 'Nem adta meg a tanuló születési idejét!',
                'szulhely.required' => 'Nem adta meg a tanuló születési helyét!',
                'anyjaneve.required' => 'Nem adta meg a tanuló anyja nevét!',
                'lakcim.required' => 'Nem adta meg a tanuló lakcímét!',
                'email.required' => 'E-mail cím megadása kötelező!'
            ]);
            $datum = date_format(date_create($request->szuldatum), 'Y-m-d');
            $user = new User;
            $user->fel_nev = $request->oktazon;
            $user->fel_jelszo = Hash::make('RKT-'.$datum.'-123');
            $user->fel_email = $request->email;
            $user->tema_id = 1;
            $user->jog_id = 1;

            $user->save();
            $felhid = User::select('fel_id')->where('fel_nev', '=', $request->oktazon)->get();

            $data = new diak;
            $data->diak_nev = $request->tanulonev;
            $data->diak_id = $request->oktazon;
            $data->oszt_id = $request->osztaly;
            $data->diak_szuldatum = date_format(date_create($request->szuldatum), 'Y-m-d');
            $data->diak_szulhely = $request->szulhely;
            $data->diak_anyja = $request->anyjaneve;
            $data->diak_lakcim = $request->lakcim;
            $data->fel_id = $felhid[0]->fel_id;

            $data->save();
        }
        else if ($request->input('tipus') == "tanár"){
            $request->validate([
                'tanarnev' => 'required',
                'usern' => 'required',
                'email' => 'required'
            ],[
                'osztalynev.required' => 'Nem adott meg nevet!',
                'usern.required' => 'Nem adott meg felhasználónevet!',
                'email.required' => 'E-mail cím megadása kötelező!'
            ]);

            $user = new User;
            $user->fel_nev = $request->usern;
            $user->fel_jelszo = Hash::make('RKT-'.$request->usern.'-123');
            $user->fel_email = $request->email;
            $user->tema_id = 1;
            $user->jog_id = 2;

            $user->save();
            $felhid = User::select('fel_id')->where('fel_nev', '=', $request->usern)->get();

            $data = new tanar;
            $data->tanar_nev = $request->tanarnev;
            $data->fel_id = $felhid[0]->fel_id;
            $data->save();
        }
        else if ($request->input('tipus') == "tanított"){
            $request->validate([
                'tanar_id' => 'required',
                'tantargy_id' => 'required'
            ],[
                'tanar_id.required' => 'Nem választott ki tanárt!',
                'tantargy_id.required' => 'Nem választott ki tantárgyat!'
            ]);
            $data = new tanitott;
            $data->tanar_id = $request->tanar_id;
            $data->tant_id = $request->tantargy_id;
            $data->save();
        }
        else if ($request->input('tipus') == "órarend"){
            $request->validate([
                'datum' => 'required',
                'oraszam' => 'required'
            ],[
                'datum' => 'Nem adott meg dátumot',
                'oraszam.required' => 'Nem adta meg az óraszámot!'
            ]);
            $data = new ora;
            $data->oszt_id = $request->osztaly;
            $data->ora_datum = $request->datum;
            $data->ora_szam = $request->oraszam;
            $data->tanit_id = $request->tanit;
            $data->ora_terem = $request->terem;
            $data->save();
        }
        else if ($request->input('tipus') == "tantárgy"){
            $request->validate([
                'tantargy' => 'required'
            ],[
                'tantargy.required' => 'Nem adott meg tantárgyat!'
            ]);
            $data = new tantargy;
            $data->tant_nev = $request->tantargy;
            $data->save();
        }
        else return redirect('/404');
        return redirect('felvetel');
    }
}
