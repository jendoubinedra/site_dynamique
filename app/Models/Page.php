<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $primaryKey = 'id_page'; 

    protected $fillable=['name'];

    public function links(){
        return $this ->hasMany(Link::class,'id_page','id_page');
    }
}
