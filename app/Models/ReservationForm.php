<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationForm extends Model
{
    use HasFactory;

    protected $table = 'reservations_forms';
    
    protected $primaryKey = 'form_id';
    
    public $incrementing = false;
    
    protected $keyType = 'string';
    
    public $timestamps = false;
    
    protected $fillable = [
        'form_id',
        'form_public_url',
        'reservation_id',
        'user_id',
        'timestamp'
    ];
    
    protected $casts = [
        'timestamp' => 'datetime'
    ];
    
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}