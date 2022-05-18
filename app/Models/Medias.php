<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;
    protected $fillable = [
        'prize_id',
        'path',
        'prize_name'
    ];

    public function medias () {
        return $this->belongsTo('App\Models\Prizes', 'id', 'prize_id');
    }
}