<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $table = 'annonce';

    protected $fillable = [
        'id_ann',
        'texte',
        'date_pub',
        'heure_pub',
        'type',
        'id_per_fk',
        'valid',
        'prix',
        'titre',
        'tel',
        'location',
        'tel1',
        'tel2',
        'vue',
        'categorie',
        'vip',
        'share',
        'updatedAt',
    ];
}
