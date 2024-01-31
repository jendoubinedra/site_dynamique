<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastename','description','website','id_special','id_countries'];
    public function special(){
        return $this->belongsTo(Specialsession::class);
    }

    public function countrie(){
        return $this->belongsTo(Countrie::class);
    }

}
