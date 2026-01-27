<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'question',
        'question_en',
        'answer',
        'answer_en',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
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

    public function getLocalizedQuestionAttribute()
    {
        if (app()->getLocale() === 'en' && $this->question_en) {
            return $this->question_en;
        }
        return $this->question;
    }

    public function getLocalizedAnswerAttribute()
    {
        if (app()->getLocale() === 'en' && $this->answer_en) {
            return $this->answer_en;
        }
        return $this->answer;
    }
}
