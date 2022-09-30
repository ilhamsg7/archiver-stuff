<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = [
        'roles_name',
        'created_at',
        'updated_at',
    ];

    public function getRouteKeyName() {
        return 'roles_name';
    }

    public function user() {
        return $this->hasMany(User::class);
    }
}
