<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tantargy extends Model
{
    protected $table = "tantargyak";
    protected $primaryKey = 'tant_id';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'tant_id',
        'tant_nev'
    ];
}
