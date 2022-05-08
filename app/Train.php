<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    //
    protected $fillable = [
        'Azienda',
        'Stazione_di_partenza',
        'Stazione_di_arrivo',
        'Orario_di_partenza',
        'Orario_di_arrivo',
        'Codice_treno',
        'Numero_carrozze',
        'In_orario',
        'Cancellato',
        'Data_di_partenza',
    ];
    public $timestamps = false;
}
