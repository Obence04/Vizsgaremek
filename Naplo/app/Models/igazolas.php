<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class igazolas extends Model
{
    protected $table = "igazolasok";
    protected $primaryKey = 'iga_id';
    public $timestamps = false;
    use HasFactory;
}
