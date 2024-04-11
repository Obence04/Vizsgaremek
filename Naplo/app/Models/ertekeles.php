<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ertekeles extends Model
{
    protected $table = "ertekelesek";
    protected $primaryKey = 'ert_id';
    public $timestamps = false;
    use HasFactory;
}
