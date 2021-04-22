<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricator extends Model
{
    protected $table='fabricators';

    public $timestamps=false;
    protected $fillable=[
        'id',
        'name',
        'site',
    ];
}
