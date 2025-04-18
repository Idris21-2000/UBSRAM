<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    protected $fillable = [
        'reg_number',
        'machine_type',
        'machine_type',
        'status',
        'assigned_operator'
    ];

    public function type()
{
    return $this->belongsTo(MachineType::class, 'machine_type');
}

public function condition()
{
    return $this->belongsTo(MachineCondition::class, 'condition');
}

public function status()
{
    return $this->belongsTo(MachineStatus::class, 'status');
}

public function operator()
{
    return $this->belongsTo(User::class, 'assigned_operator');
}

public function payments()
{
    return $this->hasMany(Payment::class, 'for_machine');
}
    
}
