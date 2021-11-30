<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function newbie()
    {
        return $this->belongsToMany(User::class)
            ->wherePivot('created_at', '>', now()->subWeek());
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('description')
            ->as('mypivot')
            ->using(RoleUser::class)
            ->withTimestamps();
    }
}
