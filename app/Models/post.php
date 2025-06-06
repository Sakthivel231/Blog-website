<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Category;

class post extends Model
{
    protected $fillable = ['title','content','img_url'];

    public static function boot(){
        parent::boot();
        static::creating(function($post){
               $post->slug =Str::slug($post->title);
               //check if the slug is already exists for any post
               $slugCount=post::where('slug',$post->slug)->count();
               if($slugCount> 0){
                $post->slug .='-'.($slugCount+1);  //Append a number to make it unique
               }

        });
    }

                      // One to many relation
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
