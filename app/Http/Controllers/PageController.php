<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    //

    public function index(){
        $trains = Train::all();

        return view('index', compact('trains'));

    }

    public function populate(){
        for ($i=0; $i < 100; $i++) {
            $singleTrain = new Train();
            $singleTrain->Azienda = 'trenitalia;';
            $singleTrain->Stazionedipartenza = 'Roma Termini';
            $singleTrain->Stazionediarrivo = 'Milano';
            $singleTrain->Orariodipartenza = 12-36;
            $singleTrain->Orariodiarrivo = 16-53;
            $singleTrain->Codicetreno = 23445;
            $singleTrain->Numerocarrozze = 12;
            $singleTrain->Inorario = 'yes';
            $singleTrain->Inorario = 'no';
            //$singleTrain->save();

            return 'completato';
        }
    }
}
