<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'data_plat';
    protected $guarded = [];
    protected $primaryKey = "Plat";
    protected $keyType = 'string';
}
