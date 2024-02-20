<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diakok;
use App\Models\orarend;
use App\Models\osztalyok;
use App\Models\tanarok;
use App\Models\tanitott;
use App\Models\tantargyak;

class AdminController extends Controller
{
    function Felvetel(){
        return view('felvetel',[
            'tanardb' => tanarok::count(),
            'tanarok' => tanarok::all(),

            'osztalydb' => osztalyok::count(),
            'osztalyok' => osztalyok::all(),

            'tantargydb' => tantargyak::count(),
            'tantargyak' => tantargyak::all()
        ]);
    }

    function Hozzaadas(Request $request){
        if ($request->input('tipus') == "osztály") {
            $request->validate([
                'osztalynev' => 'required',
                'osztalyfonok_id' => 'unique:osztalyok,osztalyfonok_id'
            ],[
                'osztalynev.required' => 'Nem adott meg nevet!',
                'osztalyfonok_id.unique' => 'Ez a tanár már más osztálynak az osztályfőnöke!'
            ]);
            $data = new osztalyok;
            $data->megnevezes = $request->osztalynev;
            $data->osztalyfonok_id = $request->osztalyfonok_id;
            $data->save();
        }
        else if ($request->input('tipus') == "tanuló"){
            $request->validate([
                'tanulonev' => 'required',
                'oktazon' => 'unique:diakok,oktazon',
                'osztaly' => 'required',
                'szuldatum' => 'required',
                'szulhely' => 'required',
                'anyjaneve' => 'required',
                'lakcim' => 'required',
            ],[
                'tanulonev.required' => 'Nem adott meg nevet!',
                'oktazon.unique' => 'Ez az oktatási azonosító már benne van az adatbázisban!',
                'osztaly.required' => 'Nem adta meg az osztályt!',
                'szuldatum.required' => 'Nem adta meg a tanuló születési idejét!',
                'szulhely.required' => 'Nem adta meg a tanuló születési helyét!',
                'anyjaneve.required' => 'Nem adta meg a tanuló anyja nevét!',
                'lakcim.required' => 'Nem adta meg a tanuló lakcímét!'
            ]);
            $data = new diakok;
            $data->nev = $request->tanulonev;
            $data->oktazon = $request->oktazon;
            $data->osztaly_id = $request->osztaly;
            $data->szuldatum = $request->szuldatum;
            $data->szulhely = $request->szulhely;
            $data->anyja_neve = $request->anyjaneve;
            $data->lakcim = $request->lakcim;
            $data->save();
        }
        else if ($request->input('tipus') == "tanár"){
            $request->validate([
                'tanarnev' => 'required'
            ],[
                'osztalynev.required' => 'Nem adott meg nevet!'
            ]);
            $data = new tanarok;
            $data->nev = $request->tanarnev;
            $data->save();
        }
        else if ($request->input('tipus') == "tanított"){
            $request->validate([
                'tanarnev' => 'required'
            ],[
                'tanarnev.required' => 'Nem adott meg nevet!'
            ]);
            $data = new tanitott;
            $data->nev = $request->tanarnev;
            $data->save();
        }
        else if ($request->input('tipus') == "órarend"){
            $request->validate([
                'tanarnev' => 'required'
            ],[
                'osztalynev.required' => 'Nem adott meg nevet!'
            ]);
            $data = new orarend;
            $data->nev = $request->tanarnev;
            $data->save();
        }
        else if ($request->input('tipus') == "tantárgy"){
            $request->validate([
                'tantargy' => 'required'
            ],[
                'tantargy.required' => 'Nem adott meg tantárgyat!'
            ]);
            $data = new tantargyak;
            $data->nev = $request->tantargy;
            $data->save();
        }
        else return redirect('asd');
    }
}
