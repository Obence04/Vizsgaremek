<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class osztaly extends Model
{
    protected $table = "osztalyok";
    protected $primaryKey = 'oszt_id';
    public $timestamps = false;
    use HasFactory;
}
