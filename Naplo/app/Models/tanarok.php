<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanarok extends Model
{
    protected $table = "tanarok";
    protected $primaryKey = 'tanar_id';
    public $timestamps = false;
    use HasFactory;
}
