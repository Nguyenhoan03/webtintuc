<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commenttintuc1 extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
  
   
    protected $table = 'commenttintuc1';
    protected $primaryKey = 'id';
    protected $guarded = [
        'email',
        'name',
        'slug',
        'content',
        'com_product_tintuc1',
        'thoigian',
    ];

}
