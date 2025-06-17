<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\File;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;

    public $fillable = [
        'name'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            foreach ($category->products as $product) {
                if ($product->image && File::exists(public_path('product-image/' . $product->image))) {
                    File::delete(public_path('product-image/' . $product->image));
                }
            }
        });
    }
}
