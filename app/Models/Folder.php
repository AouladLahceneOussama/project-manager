<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name'
    ];

    public function archives()
    {
        return $this->hasMany(Archive::class);
    }
}
