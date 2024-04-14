<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    protected $table = "temak";
    protected $primaryKey = 'tema_id';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'tema_id',
        'tema_nev'
    ];
}
