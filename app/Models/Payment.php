<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_id',
        'status',
        'for_machine',
        'paid_by',
        'verified_by'
    ];

    public function machine()
{
    return $this->belongsTo(Machine::class, 'for_machine');
}

public function payer()
{
    return $this->belongsTo(User::class, 'paid_by');
}

public function verifier()
{
    return $this->belongsTo(User::class, 'verified_by');
}

}
