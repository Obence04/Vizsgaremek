<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hianyzas extends Model
{
    protected $table = "hianyzasok";
    protected $primaryKey = 'hia_id';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'hia_id',
        'ora_id',
        'diak_id',
        'hia_keses',
        'hia_perc',
        'iga_id'
    ];
}
