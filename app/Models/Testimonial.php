<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'role',
        'role_en',
        'content',
        'content_en',
        'image',
        'rating',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rating' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    public function getLocalizedContentAttribute()
    {
        if (app()->getLocale() === 'en' && $this->content_en) {
            return $this->content_en;
        }
        return $this->content;
    }

    public function getLocalizedRoleAttribute()
    {
        if (app()->getLocale() === 'en' && $this->role_en) {
            return $this->role_en;
        }
        return $this->role;
    }
}
