<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pageintro extends Model
{
    use HasFactory;

    protected $table = 'pageintro_text';

     protected $fillable = [
       'page_name', 'title', 'description',
     ];
}
