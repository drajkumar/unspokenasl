<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fquestion extends Model
{
    use HasFactory;

    protected $table = 'fquestions';

    protected $fillable = [
       'question', 'answer',
    ];
}
