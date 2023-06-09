<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'nama'
    ];
    public function Forums(){
        return $this->hasMany(Forum::class,'Category_id');
    }

    public function items(){
        return $this->hasMany(Item::class,'Category_id');
    }
}
