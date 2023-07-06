<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thoitrang extends Model
{
    protected $fillable = ['title', 'description', 'content','hinhanh1','slug'];

    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'thoitrang';
    protected $primaryKey = 'id';
    protected $guarded = [
       'title',
       'description',
       'content',
        'hinhanh1',
    
        'slug'
    ];

}