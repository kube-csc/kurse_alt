<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseParticipant extends Model
{
    use SoftDeletes;

    protected $fillable = [
          'nachname',
          'vorname',
          'sportSection_id',
          'passwort',
          'email',
          'telefon',
          'nachricht',
          'status'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
