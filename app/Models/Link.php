<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable=['href','id_page'];

    public function page(){
        return $this->belongsTo(page::class);
    }
}
