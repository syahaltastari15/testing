<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerRating extends Model
{
    use HasFactory;
    protected $table = "trainer_ratings";
    protected $fillable = ['participant_id','product_id','trainer_id'];

    public function products(){
    	return $this->belongsToMany('App\Models\Product');
    }
}
