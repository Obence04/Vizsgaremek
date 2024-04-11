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

    protected $fillable = [
        'ora_id',
        'oszt_id',
        'ora_datum',
        'ora_szam',
        'tanit_id',
        'ora_terem'
    ];
}
