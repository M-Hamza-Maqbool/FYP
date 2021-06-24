<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Database\Schema\ForeignKey;

class Shop extends Model
{
    protected $guarded = [];  
    // use HasFactory;

  
    public function model()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
