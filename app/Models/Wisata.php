<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'tbl_wisata';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
}
