<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
        'first_name',
        'last_name',
        'role',
        'password',
        'email',
        'image',
        'verified',
        'adress',
        'birth_date',
        'ID_code',
        'theme',
        'organization',
        'children',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'verified' => 'boolean',
        'theme' => 'boolean',
        'children' => 'boolean',
        'birth_date' => 'date',
    ];

    /**
     * Get the role that owns the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    /**
     * Get the organization that owns the user.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization');
    }

    /**
     * Get the groups owned by the user.
     */
    public function ownedGroups()
    {
        return $this->hasMany(Group::class, 'owner');
    }

    /**
     * The groups that the user belongs to.
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'users_groups', 'userId', 'groupId');
    }

    /**
     * The reservations that the user belongs to.
     */
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'users_reservations', 'userId', 'reservationId')
                    ->withPivot('verified', 'outside', 'timestamp');
    }

    /**
     * Get the reservation forms for the user.
     */
    public function reservationForms()
    {
        return $this->hasMany(ReservationForm::class, 'user_id');
    }
}