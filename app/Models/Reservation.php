<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservations';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'from_date',
        'to_date',
        'name',
        'purpouse',
        'leader',
        'instructions',
        'status',
        'creation_date',
        'success_link',
        'payment_symbol',
        'reject_reason',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'creation_date' => 'datetime',
    ];

    /**
     * Get the leader user for the reservation.
     */
    public function leader()
    {
        return $this->belongsTo(User::class, 'leader');
    }

    /**
     * Get the status of the reservation.
     */
    public function status()
    {
        return $this->belongsTo(Status::class, 'status');
    }

    /**
     * The groups that belong to the reservation.
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'reservations_groups', 'reservationId', 'groupId');
    }

    /**
     * The rooms that belong to the reservation.
     */
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'reservations_rooms', 'reservationId', 'roomId');
    }

    /**
     * The users that belong to the reservation.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_reservations', 'reservationId', 'userId')
                    ->withPivot('verified', 'outside', 'timestamp');
    }

    /**
     * Get the reservation forms for the reservation.
     */
    public function reservationForms()
    {
        return $this->hasMany(ReservationForm::class, 'reservation_id');
    }

    /**
     * Get the reservation form changes for the reservation.
     */
    public function reservationFormChanges()
    {
        return $this->hasMany(ReservationFormChange::class, 'reservation_id');
    }
}