<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'title',
        'description',
        'lvl',
        'total'
    ];

    protected function total() : Attribute
    {
        return Attribute::make(
            get: fn($value) => rtrim(sprintf("%.2f", $value), ""),
        );   
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function billings()
    {
        return $this->hasMany(Billing::class,'subcategories_id');
    }
}
