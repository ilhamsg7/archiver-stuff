<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $table = 'archives';
    protected $fillable = [
        'categories_id',
        'letter_number',
        'slug',
        'title',
        'file',
    ];
    protected $with = ['category'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) => $query->where('title', 'like', '%' . $search . '%')));
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function category() {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
