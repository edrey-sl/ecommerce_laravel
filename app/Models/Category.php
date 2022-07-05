<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillabel = ['name','slug','image','icon'];

  

    //Relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategories::class); 
    }

    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategories::class);
    }

  

}
