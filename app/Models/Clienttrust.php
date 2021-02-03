<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clienttrust extends Model
{
    use HasFactory;

    protected $table = 'client_truests';

     protected $fillable = [
       'image',
     ];
}
