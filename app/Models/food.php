<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $fillable = ['name', 'description', 'calories', 'category_id'];

    public function category (){
        return $this->belongsTo(category::class);
    }
}
