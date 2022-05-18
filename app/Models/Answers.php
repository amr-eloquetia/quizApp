<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany('\App\Models\Quiz_questions', 'question_id', 'id');
    }
}