<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'long_description_en',
        'long_description_ar',
        'image',
        'type',
        'price',
        'is_active',
    ];

    public function Category(){
        return $this->belongsTo(Category::class ,'category_id');
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/product') . '/' . $image;
        }
        return null;

    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'product');
            $this->attributes['image'] = $imageFields;
        }
    }
}
