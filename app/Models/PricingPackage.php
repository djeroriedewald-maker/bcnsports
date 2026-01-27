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
        'name_en',
        'description',
        'description_en',
        'price',
        'price_per_session',
        'period',
        'period_en',
        'features',
        'features_en',
        'is_popular',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'price_per_session' => 'decimal:2',
        'features' => 'array',
        'features_en' => 'array',
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

    public function getLocalizedNameAttribute()
    {
        if (app()->getLocale() === 'en' && $this->name_en) {
            return $this->name_en;
        }
        return $this->name;
    }

    public function getLocalizedDescriptionAttribute()
    {
        if (app()->getLocale() === 'en' && $this->description_en) {
            return $this->description_en;
        }
        return $this->description;
    }

    public function getLocalizedPeriodAttribute()
    {
        if (app()->getLocale() === 'en' && $this->period_en) {
            return $this->period_en;
        }
        return $this->period;
    }

    public function getLocalizedFeaturesAttribute()
    {
        if (app()->getLocale() === 'en' && $this->features_en) {
            return $this->features_en;
        }
        return $this->features;
    }
}
