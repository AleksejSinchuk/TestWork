<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Substance extends Model
{
    protected $table='substances';

    public $timestamps=false;
    protected $fillable=[
        'id',
        'name',
    ];
}
