<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //use HasFactory;
    public function names(){
        return $this->belongsTo(Product::class);
    }
}
