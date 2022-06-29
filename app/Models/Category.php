<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'enable'];

    /**
     * Get the relation of the products
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
