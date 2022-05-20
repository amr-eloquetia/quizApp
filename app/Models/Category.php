<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',

    ];

    public function quiz_questions()
    {
        return $this->hasMany('\App\Models\Quiz_questions', 'category_id', 'id');
    }
}