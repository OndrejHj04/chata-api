<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $table = 'organization';
    
    public $timestamps = false;
    
    public function users()
    {
        return $this->hasMany(User::class, 'organization');
    }
}