<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	// fillable specifies which fields to be mass assigned
    protected $fillable = ['title', 'description', 'price', 'user_id', 'category_id'];
    
    // Don't need to specify guarded if you have $fillable, because, whatever is not in fillable is guarded
    // guarded specifies which fields are not mass assignable
    // protected $guarded = ['id', 'user_id', 'created_at']

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function category(){
    	return $this->belongsTo('App\ProductCategory', 'category_id');
    }

    public function comments(){
    	return $this->hasMany('App\ProductComment', 'product_id', 'id');
    }

    public function images(){
    	return $this->hasMany('App\ProductImage', 'product_id', 'id');
    }
}