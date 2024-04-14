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

    protected $fillable = [
        'ert_id',
        'ora_id',
        'diak_id',
        'ert_leiras',
        'ert_jegy',
        'ert_szazalek',
        'ido_id',
        'tip_id'
    ];
}
