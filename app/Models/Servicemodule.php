<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicemodule extends Model
{
    use HasFactory;

    protected $table = 'service_modules';

     protected $fillable = [
       'services_id',  'stoken', 'title', 'description', 'image',
     ];
}
