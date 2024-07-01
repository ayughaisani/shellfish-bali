<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    use HasFactory;
    protected $table = '__dashboard';
    protected $primaryKey = 'id';
    public $timestamps = true;

}