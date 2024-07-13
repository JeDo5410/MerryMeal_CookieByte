<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliver extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'user_id',
        'menu_id',
        'partner_id',
        'volunteer_id',
        'member_name',
        'member_address',
        'deliver_menu_name',
        'deliver_menu_type',
        'partner_restaurant_name',
        'partner_address',
        'volunteer_name',
        'start_deliver_time',
        'delivery_status'
    ];

    public function member(){
        return $this->belongsTo(Member::class, 'member_id','id');
    }

    public function partners(){
        return $this->belongsTo(Partner::class, 'partner_id','id');
    }

    public function menus(){
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function volunteer(){
        return $this->belongsTo(Volunteer::class, 'volunteer_id','id');
    }
}
