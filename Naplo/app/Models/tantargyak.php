<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tantargyak extends Model
{
    protected $table = "tantargyak";
    protected $primaryKey = 'tantargy_id';
    public $timestamps = false;
    use HasFactory;
}
