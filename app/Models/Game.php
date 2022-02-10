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

    protected $casts = [
        'schedule' => 'datetime:d/m/Y H:i',
    ];

    public function whites() {
        return $this->belongsTo('App\Models\Player', 'whites');
    }

    public function blacks() {
        return $this->belongsTo('App\Models\Player', 'blacks');
    }
}
