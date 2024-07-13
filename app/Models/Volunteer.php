<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'volunteer_vaccination',
        'volunteer_duration',
        'volunteer_availability'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
