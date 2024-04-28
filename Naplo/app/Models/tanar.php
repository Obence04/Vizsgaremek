<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanar extends Model
{
    protected $table = "tanarok";
    protected $primaryKey = 'tanar_id';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'tanar_id',
        'tanar_nev',
        'fel_id'
    ];
}
