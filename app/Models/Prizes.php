<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prizes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'prize1',
        'prize2',
        'prize3',
        'prize4',
        'prize5',
        'prize6',
        'prize7',
        'prize8'
    ];

    public function medias()
    {
        return $this->hasMany('\App\Models\Medias', 'prize_id', 'id');
    }
}