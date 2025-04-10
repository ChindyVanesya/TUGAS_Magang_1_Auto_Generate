<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kodes extends Model
{
    protected $table = "kode";
    public $fillable = ["kodeAset","qr_svg"];
    use HasFactory;
}