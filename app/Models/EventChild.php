<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventChild extends Model
{
    use HasFactory;

    protected $table = 'events_children';

    public function event()
    {
        return $this->belongsTo(Event::class, 'event');
    }

    public function template()
    {
        return $this->belongsTo(Template::class, 'template');
    }
}