<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'original_name',
        'path',
        'type'
    ];

    public function project(){
        return $this->belongsTo(Subcategory::class);
    }
}
