<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'play',
        'status',
        'whites',
        'blacks',
        'winner',
        'loser',
        'tie',
        'schedule'
    ];
}
