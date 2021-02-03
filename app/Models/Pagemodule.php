<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagemodule extends Model
{
    use HasFactory;

    protected $table = 'pagemodules';

     protected $fillable = [
       'page_name', 'title', 'description', 'url', 'image',
     ];
}
