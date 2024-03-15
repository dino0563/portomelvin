<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = "portfolio";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_project','category','client','tanggal','dokumentasi'
    ];

}
