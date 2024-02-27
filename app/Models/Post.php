<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; 
    // protected $fillable = ['title', 'excerpt', 'body', 'category_id']; //fillable property specifies which attributes can be mass assigned aka all attributes passed in bulk

    protected $with = ['category', 'author'];
    
    public function category() {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author() {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(User::class, 'user_id');
    }
}
