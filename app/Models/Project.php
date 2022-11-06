<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'created_by',
        'managed_by',
        'name'
    ];

    protected function total() : Attribute
    {
        return Attribute::make(
            get: fn($value) => rtrim(sprintf("%.2f", $value), ""),
        );   
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'managed_by');
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function archives()
    {
        return $this->hasMany(Archive::class);
    }
}
