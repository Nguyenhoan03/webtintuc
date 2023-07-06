<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ldl extends Model
{
    protected $fillable = ['title', 'description', 'content','hinhanh1','slug'];

    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'ldl';
    protected $primaryKey = 'id';
    protected $guarded = [
       'title',
       'description',
     
       'content',
        'hinhanh1',
       
        'slug'
    ];

}
