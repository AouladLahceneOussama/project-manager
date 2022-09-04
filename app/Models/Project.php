<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
}
