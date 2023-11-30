<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'module_id'
    ];

    protected $keyType = 'string';

    public $incrementing = false;
    
    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function question() {
        return $this->hasMany(Question::class);
    }
}
