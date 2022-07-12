<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empadronamieto extends Model
{
    use HasFactory;

    public function stand (){
        return $this->belongsTo(stand::class);
    }
    public function partner (){
        return $this->belongsTo(partner::class);
    }

    public function period(){
        return $this->belongsTo(Period::class);
    }
}
