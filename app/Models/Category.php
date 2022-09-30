<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'code',
        'category_name',
    ];

    public function getRouteKeyName() {
        return 'code';
    }

    public function archive() {
        return $this->hasMany(Archive::class);
    }
}
