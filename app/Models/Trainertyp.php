<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainertyp extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'trainerfunktion',
        'status'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
