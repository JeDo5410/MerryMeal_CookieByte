<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_guardian_name',
        'member_guardian_relation',
        'member_medical_condition',
        'member_medical_number',
        'member_meal_type',
        'member_meal_duration'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
