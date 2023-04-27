<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $appends = ['name','description','button','why_us_name','why_us_description'];

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
    public function getWhyUsNameAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->why_us_name_ar;
        } else {
            return $this->why_us_name_en;
        }
    }
    public function getWhyUsDescriptionAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->why_us_description_ar;
        } else {
            return $this->why_us_description_en;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Setting') . '/' . $image;
        }
        return asset('defaults/default_blank.png');
    }
    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Setting');
            $this->attributes['image'] = $imageFields;
        }else {
            $this->attributes['image'] = $image;
        }
    }
}
