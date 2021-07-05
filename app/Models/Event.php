<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'item_id',
    ];

    protected $table='events';

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items(){
        return $this->belongsTo(Item::class, 'item_id');
    }

}
