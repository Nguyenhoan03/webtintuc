<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'comment';
    protected $primaryKey = 'id';
    protected $guarded = [
        'email',
        'name',
        'slug',
        'content',
        'com_product',
        'thoigian',
        
    ];

}
