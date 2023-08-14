<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coursedate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'trainer_id',
        'course_id',
        'sportSection_id',
        'kurstermin',
        'startzeit',
        'startzeitmax',
        'laenge',
        'sportgeraetanzahl'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function getCousename()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function getTrainerName()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }

}
