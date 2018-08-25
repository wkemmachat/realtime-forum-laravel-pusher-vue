<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // when search by api dont' use id use slug instead
    public function getRouteKeyName(){
        return 'slug';
    }

    // path
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

    // protected $fillable = ['title','slug','body','category_id','user_id'];
    protected $guarded = [];

}
