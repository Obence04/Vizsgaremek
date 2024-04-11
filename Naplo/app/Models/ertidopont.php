<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ertidopont extends Model
{
    protected $table = "ertidopontok";
    protected $primaryKey = 'ido_id';
    public $timestamps = false;
    use HasFactory;
}
