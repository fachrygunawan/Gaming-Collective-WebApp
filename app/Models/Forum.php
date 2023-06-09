<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    

    public function Category(){
        return $this->belongsTo(Category::class,'Category_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'User_id');
    }
    public function replies(){
        return $this->hasMany(reply::class,'post_id');
    }
}
