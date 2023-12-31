<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'excerpt' , 'body' ];

    public function scopeFilter($query , array $filers){
        $query->when($filers['search'] ?? false ,fn($query,$search)=>
        $query
            ->where('title','like','%' .$search.'%')
            ->orWhere('body','like','%'.$search.'%'));
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    

    public function user(){
        return $this->belongsTo(User::class);
    }
   
}
