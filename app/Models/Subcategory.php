<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function billings()
    {
        return $this->hasMany(Billing::class,'subcategories_id');
    }
}
