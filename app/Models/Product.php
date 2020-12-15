<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['name','email'];

    public function participants(){
    	return $this->belongsToMany('App\Models\Participant');
    }

    public function trainers(){
    	return $this->belongsToMany('App\Models\Trainer');
    }

    public function topic()
    {
        return $this->hasMany('App\Models\Topic');
    }

}
