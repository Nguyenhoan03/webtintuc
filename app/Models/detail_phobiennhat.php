<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_phobiennhat extends Model
{
    public $timestamps = FALSE;
    use HasFactory;

    protected $table = 'detail_phobiennhat';
    protected $primaryKey = 'id';
    protected $guarded = [
        'hinhanh',
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
