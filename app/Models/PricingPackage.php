<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPackage extends Model
{
    public const CATEGORY_PERSONAL_1ON1 = 'personal_1on1';
    public const CATEGORY_DUO = 'duo';
    public const CATEGORY_SMALL_GROUP = 'small_group';
    public const CATEGORY_EVENT = 'event';
    public const CATEGORY_MILSIM = 'milsim';
    public const CATEGORY_BUSINESS = 'business';

    public static array $categories = [
        self::CATEGORY_PERSONAL_1ON1 => '1:1 Personal Training',
        self::CATEGORY_DUO => '1:2 Training (Duo)',
        self::CATEGORY_SMALL_GROUP => 'Small Group Training',
        self::CATEGORY_EVENT => 'Event Training',
        self::CATEGORY_MILSIM => 'Bootcamp Trials',
        self::CATEGORY_BUSINESS => 'Bedrijfs-bootcamp',
    ];

    protected $fillable = [
        'category',
        'name',
        'description',
        'price',
        'price_per_session',
        'period',
        'features',
        'is_popular',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'price_per_session' => 'decimal:2',
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function getFormattedPriceAttribute()
    {
        return '€' . number_format($this->price, 2, ',', '.');
    }

    public function getFormattedPricePerSessionAttribute()
    {
        if ($this->price_per_session) {
            return '€' . number_format($this->price_per_session, 2, ',', '.');
        }
        return null;
    }

    public function getCategoryLabelAttribute()
    {
        return self::$categories[$this->category] ?? $this->category;
    }
}
