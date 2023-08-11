<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainertable extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'trainer_id',
        'trainertyp_id',
        'sportSection_id',
        'autor_id',
        'bearbeiter_id',
        'status',
        'sichtbar'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function getKursTrainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }

    public function getTrainertyp()
    {
        return $this->belongsTo(Trainertyp::class, 'trainertyp_id');
    }
}
