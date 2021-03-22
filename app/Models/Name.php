<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'age'
    ];

    public function scopeIsAdult($query)
    {
        return $query->where('age', '>=', '18');
    }

    public function getFioAttribute()
    {
        return $this->last_name . ' ' . mb_substr($this->first_name, 0, 1) . '.';
    }
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }
}
