<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'image',
        'type',
    ];
    protected $appends = ['name','description'];

    public function scopeActive($query)
    {
        return $query->where('is_active','active');
    }

    public function getNameAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }
    public function getDescriptionAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->description_ar;
        } else {
            return $this->description_en;
        }
    }
    public function Products(){
        return $this->HasMany(Product::class ,'category_id');
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/categories') . '/' . $image;
        }
        return null;

    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'categories');
            $this->attributes['image'] = $imageFields;
        }
    }
}
