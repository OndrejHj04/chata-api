<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'groups';

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
        'name',
        'owner',
        'description',
    ];

    /**
     * Get the owner of the group.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner');
    }

    /**
     * The users that belong to the group.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_groups', 'groupId', 'userId');
    }

    /**
     * The reservations that belong to the group.
     */
    public function reservations()
    {
        return $this->belongsToMany(ReservationForm::class, 'reservations_groups', 'groupId', 'reservationId');
    }
}