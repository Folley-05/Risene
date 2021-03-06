<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activites extends Model 
{
    use HasFactory;

    protected $table = 'activites';
    protected $primaryKey = 'code';
    public $timestamps = true;
    protected $fillable = array('intitule', 'code');

    public function typeNomenclature()
    {
        return $this->hasOne('App\Models\TypeNommenclatures', 'id_typeNomenclature');
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

    public function secteurActivite()
    {
        return $this->belongsTo('App\Models\SecteurActivites');
    }

}