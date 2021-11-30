<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUser extends Pivot
{
    public function assigner()
    {
        return $this->belongsTo(User::class, 'assigner_id');
    }
}
