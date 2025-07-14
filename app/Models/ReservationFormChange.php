<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationFormChange extends Model
{
    use HasFactory;

    protected $table = 'reservations_forms_changes';
    
    public $timestamps = false;
    
    protected $fillable = [
        'reservation_id',
        'form_id',
        'direction',
        'form_public_url',
        'timestamp'
    ];
    
    protected $casts = [
        'direction' => 'boolean',
        'timestamp' => 'datetime'
    ];
    
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
}