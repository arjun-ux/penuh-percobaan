<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $guarded = [];
    public function Role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
