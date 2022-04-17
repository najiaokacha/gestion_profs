<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeurs extends Model
{
    use HasFactory;
    protected $fillable=['nom','user_id','prenom','email','cin','image','telephone','date_recrutement','date_naissance','specialite','appartenant_a_ENSAJ','Dossier_scientifique','etat_ds','Dossier_Pedagogique','etat_dp','Dossier_administratif','etat_da'];
}
