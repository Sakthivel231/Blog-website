<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    protected $fillable = ["name","slug"];

    public static function boot(){
        parent::boot();
        static::creating(function($categary){
               $categary->slug =Str::slug($categary->name);
               //check if the slug is already exists for any post
               $slugCount=post::where('slug',$categary->slug)->count();
               if($slugCount> 0){
                $categary->slug .='-'.($slugCount+1);  //Append a number to make it unique
               }

        });
    }
}
