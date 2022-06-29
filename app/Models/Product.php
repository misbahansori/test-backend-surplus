<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'enable'];

    /**
     * Get the relation of the categories
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }
    /**
     * Get the relation of the images.
     */
    public function images()
    {
        return $this->belongsToMany(Image::class, 'product_image');
    }
}
