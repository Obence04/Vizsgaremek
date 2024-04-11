<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanitott extends Model
{
    protected $table = "tanitott";
    protected $primaryKey = 'tanit_id';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'tanit_id',
        'tanar_id',
        'tant_id'
    ];
}
