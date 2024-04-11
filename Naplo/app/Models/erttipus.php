<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class erttipus extends Model
{
    protected $table = "erttipusok";
    protected $primaryKey = 'tip_id';
    public $timestamps = false;
    use HasFactory;
}
