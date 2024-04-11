<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jog extends Model
{
    protected $table = "jogok";
    protected $primaryKey = 'jog_id';
    public $timestamps = false;
    use HasFactory;
}
