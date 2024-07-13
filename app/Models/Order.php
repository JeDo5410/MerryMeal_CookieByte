<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'user_id',
        'menu_id',
        'partner_id',
        'member_name',
        'member_address',
        'member_phone',
        'order_menu_image',
        'order_menu_name',
        'order_menu_type',
        'order_menu_restaurant',
        'partner_address',
        'menu_plan',
        'start_cooking_time',
        'order_cooking_status',
        'order_received_status'
    ];

    public function partners(){
        return $this->belongsTo(Partner::class, 'partner_id','id');
    }

    public function members(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

    public function menus(){
        return $this->belongsTo(Menu::class, 'menu_id','id'); 
    }
}
