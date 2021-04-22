<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $table='medicaments';

    public $timestamps=false;
    protected $fillable=[
        'id',
        'name',
        'fabricator_id',
        'substance_id',
        'price',

    ];
}
