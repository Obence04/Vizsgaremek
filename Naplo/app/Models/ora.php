<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ora extends Model
{
    protected $table = "orak";
    protected $primaryKey = 'ora_id';
    public $timestamps = false;
    use HasFactory;
}
