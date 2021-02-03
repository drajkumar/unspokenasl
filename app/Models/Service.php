<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

     protected $fillable = [
       'token', 'name', 'description', 'image',
     ];

     public function servicemodule()
     {
       
       return $this->hasMany(Servicemodule::class, 'services_id')->orderBy('id', 'DESC');
     }

     public function servicesettings()
     {
       
       return $this->hasMany(Servicesetting::class, 'services_id')->orderBy('id', 'DESC');
     }
}
