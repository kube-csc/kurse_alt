<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SportEquipmentBooked extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'trainer_id',
        'mitglied_id',
        'teilnehmer_id',
        'sportgeraet_id',
        'kurs_id'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
