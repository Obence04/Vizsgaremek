<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beallitasok extends Model
{
    protected $table = 'beallitasok';
    protected $primaryKey = 'felhasznalo_id';
    public $timestamps = false;
    use HasFactory;
}
