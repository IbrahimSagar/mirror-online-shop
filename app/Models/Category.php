<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function parent()
    {
    	return $this->belongsTo(Category::class, 'parent_id');
    }
}
