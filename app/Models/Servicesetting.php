<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicesetting extends Model
{
    use HasFactory;

    protected $table = 'service_setting';

     protected $fillable = [
       'services_id',  'stoken', 'title', 'image',
     ];
}
