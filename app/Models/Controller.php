<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controller extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //relación uno a uno inversa
    public function partner(){
        return $this->belongsTo(partner::class);
    }

    public function period(){
        return $this->belongsTo(Period::class);
    }
}
