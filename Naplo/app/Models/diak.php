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

    protected $fillable = [
        'diak_id',
        'diak_nev',
        'diak_szuldatum',
        'diak_szulhely',
        'diak_anyja',
        'diak_lakcim',
        'oszt_id',
        'fel_id'
    ];
}
