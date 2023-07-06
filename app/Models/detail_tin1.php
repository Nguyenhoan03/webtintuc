<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_tin1 extends Model
{
    public $timestamps = FALSE;
    use HasFactory;

    protected $table = 'detail_tin1';
    protected $primaryKey = 'id';
    protected $guarded = [
        'noidungchinh',
        'slug',
        'noidung1',
        'hinhanh1',
        'noidung2',
        'hinhanh2',
        'noidung3',
        'hinhanh3',
        'noidung4',
        'hinhanh4',
        'noidung5',
        'hinhanh5',
        'noidung6',
        'hinhanh6',
      

    ];
}
