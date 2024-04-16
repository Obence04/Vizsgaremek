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
    function Felvetel(){
        if (Auth::check()){
            if (Auth::user()->jog_id > 2){
                return view('felvetel',[
                    'user'          => User::find(Auth::user()->fel_id),
                    'jog'           => User::find(Auth::user()->fel_id)->jog_id,
                    'tanardb'       => tanar::count(),
                    'tanarok'       => tanar::all(),

                    'osztalydb'     => osztaly::count(),
                    'osztalyok'     => osztaly::all(),

                    'tantargydb'    => tantargy::count(),
                    'tantargyak'    => tantargy::all(),

                    'ttanar'       => tanitott::select('tanitott.tanit_id', 'tanarok.tanar_nev', 'tantargyak.tant_nev')->join('tanarok','tanarok.tanar_id','tanitott.tanar_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->get(),
                    //'t-tanar'       => tanitott::select('tanar.nev', 'tantargy.megnevezes')->join('tanar', 'tanar.tanar_id', 'tanitott-tantargy.tanarok_tanar_id')->join('tantargy', 'tantargy.tantargy_id', 'tanitott-tantargy.tantargyak_tantargy_id')->get(),

                    'tema' => tema::find(User::find(Auth::user()->fel_id)->tema_id)->tema_nev,
                ]);
            }
        }
        return redirect('/')->withErrors(['msg' => 'Nem engedélyezett művelet!']);

    }

    function FelvetelPost(Request $request){
        //dd($request);
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
            /*
            $data = new orarend;
            $data->osztaly_id = $request->osztaly;
            $data->datum = $request->datum;
            $data->nev = $request->tanarnev;
            $data->save();

            $ort = new orarend_tanitott;
            $ort->fel_id = $data->id;
            //$ort->tantargy-tanitott_kapcs_id =
            //TODO
            */
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
        else return redirect('asd');
        return redirect('felvetel');
    }
}
