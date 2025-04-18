<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nida_number',
        'phone_number',
        'user_type',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function userType()
{
    return $this->belongsTo(UserType::class, 'user_type');
}

public function assignedMachines()
{
    return $this->hasMany(Machine::class, 'assigned_operator');
}

public function sentNotifications()
{
    return $this->hasMany(Notification::class, 'from');
}

public function receivedNotifications()
{
    return $this->hasMany(Notification::class, 'to');
}

public function paymentsMade()
{
    return $this->hasMany(Payment::class, 'paid_by');
}

public function paymentsVerified()
{
    return $this->hasMany(Payment::class, 'verified_by');
}

}

