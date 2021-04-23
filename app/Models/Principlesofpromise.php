<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principlesofpromise extends Model
{
    use HasFactory;

    protected $table = 'principlesofpromises';

    protected $fillable = [
         'title', 'description', 'icon',
    ];
}
