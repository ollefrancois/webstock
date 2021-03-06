<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $table = 'rdv';
    public $timestamps = false;
 	protected $primaryKey = 'ID_RDV';

    public function getAll()
    {
        return Rdv::all();
    }

    public function getById($idRdv)
    {
        return Rdv::findOrFail($idRdv);
    }

    public function getByRep($idRep)
    {
        return Rdv::where('ID_REP', '=', $idRep)->get();
    }
}
