<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentchung extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
   
   
    protected $table = 'commentchung';
    protected $primaryKey = 'id';
    protected $guarded = [
        'email',
        'name',
        'slug',
        'content',
       
        'commenttulieu',
        'commentphantich',
            'commentcuocsongdoday',	
        'commentsuckhoe',
            'commentdoisong',	
        'commentdulich',	
        'commentthoisu',	
        'commentphapluat',
            'commentgiaitri',	
        'commentkinhdoanh',	
        'commentkhoahoc',	
        'commentthoitrang',
            'commentgiaoduc',	
        'commentgiaothong'	,
        'commentlaodongvieclam',	
        'commentthegioitunhien',
            'commentcacmonkhac',	
        'commenttinchinh',
        'commentcontact',
        'thoigian',
    ];
}