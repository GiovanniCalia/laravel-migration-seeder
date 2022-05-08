<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    //

    public function index(){
        $trains = Train::paginate(10) //where('Data_di_partenza', 'like', date('Y-m-d'))
        //->get()
        ;
        //dd($trains)
        ;


        return view('index', compact('trains'));

    }

    public function populate(){
        for ($i=0; $i < 5; $i++) {
            $singleTrain = new Train();
            $singleTrain->Azienda = 'Trenitalia';
            $singleTrain->Stazione_di_partenza = 'Roma Termini';
            $singleTrain->Stazione_di_arrivo = 'Milano Porta Garibaldi';
            $singleTrain->Orario_di_partenza = 12-36;
            $singleTrain->Orario_di_arrivo = 16-53;
            $singleTrain->Codice_treno = 23445;
            $singleTrain->Numero_carrozze = 12;
            $singleTrain->In_orario = 'yes';
            $singleTrain->Cancellato = 'no';
            //$singleTrain->save();
            dd($singleTrain);

            return 'completato';
        }
    }
}
