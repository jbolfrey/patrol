<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

  

class Product extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'name', 'category', 'role', 'incident', 'location', 'departure', 'arrival',  'detail', 'image'

    ];

}