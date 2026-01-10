<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'admin_notes',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }

    public function markAsRead()
    {
        $this->update([
            'read_at' => now(),
            'status' => $this->status === 'new' ? 'read' : $this->status,
        ]);
    }
}
