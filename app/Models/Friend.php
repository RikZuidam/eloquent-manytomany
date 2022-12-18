<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $table = 'friend';
    
    protected $fillable = [
        'sender_id',
        'reciever_id',
        'state',
    ];
    
    protected $hidden = [
        'state',
    ];
    
    protected $casts = [
        // 
    ];
}
