<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'project_id',
        'managed_by',
        'title',
        'description',
        'total'
    ];

    protected function total() : Attribute
    {
        return Attribute::make(
            get: fn($value) => rtrim(sprintf("%.2f", $value), ""),
        );   
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function subcategories(){
        return $this->hasMany(Subcategory::class, 'categories_id');
    }
}
