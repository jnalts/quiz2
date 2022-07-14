<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    use HasFactory;
    protected $table = "tb_masuk";
    protected $primaryKey = 'masuk_id';
    protected $guarded = [];
}
