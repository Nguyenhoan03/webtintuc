<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commenttintuc2 extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
   
   
    protected $table = 'commenttintuc2';
    protected $primaryKey = 'id';
    protected $guarded = [
        'email',
        'name',
        'slug',
        'content',
        'com_product_tintuc2',
        'thoigian',
    ];
}
