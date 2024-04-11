<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diak extends Model
{
    protected $table = "diakok";
    protected $primaryKey = 'diak_id';
    public $timestamps = false;
    use HasFactory;
}
