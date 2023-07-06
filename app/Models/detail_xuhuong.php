<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_xuhuong extends Model
{
    public $timestamps = FALSE;
    use HasFactory;

    protected $table = 'detail_xuhuong';
    protected $primaryKey = 'id';
    protected $guarded = [
        'noidungchinh',
        'tacgia',
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
