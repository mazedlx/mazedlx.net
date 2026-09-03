<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'confirmed_at' => 'datetime',
    ];

    public function scopeConfirmed($query)
    {
        $query->whereNotNull('confirmed_at');
    }

    public function confirm(): bool
    {
        return $this->update([
            'confirmed_at' => now(),
        ]);
    }

    public function unsubscribe(): bool
    {
        return $this->delete();
    }
}
