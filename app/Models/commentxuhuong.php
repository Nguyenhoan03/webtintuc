<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentxuhuong extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
   
   
    protected $table = 'commentxuhuong';
    protected $primaryKey = 'id';
    protected $guarded = [
        'email',
        'name',
        'slug',
        'content',
        'com_product_xuhuong',
        'thoigian',
    ];
}
