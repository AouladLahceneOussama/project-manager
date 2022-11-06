<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategories_id',
        'title',
        'info',
        'remark',
        'total'
    ];

    protected function total() : Attribute
    {
        return Attribute::make(
            get: fn($value) => rtrim(sprintf("%.2f", $value), ""),
        );   
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
