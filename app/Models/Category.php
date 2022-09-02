<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'managed_by',
        'title',
        'description',
        'total'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function subcategories(){
        return $this->hasMany(Subcategory::class, 'categories_id');
    }
}
