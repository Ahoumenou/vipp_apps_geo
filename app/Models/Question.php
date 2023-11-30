<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'question',
        'quiz_id',
    ];

    public function Reponses()
    {
        return $this->hasMany(Reponses::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
