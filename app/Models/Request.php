<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'machine_id',
        'farmer_id',
        'operator_id',
        'verified_by',
        'status',
        'notes',
    ];

    public function farmer() {
        return $this->belongsTo(User::class, 'farmer_id');
    }
    
    public function machine() {
        return $this->belongsTo(Machine::class);
    }
    
    public function operator() {
        return $this->belongsTo(User::class, 'operator_id');
    }
    
    public function verifiedBy() {
        return $this->belongsTo(User::class, 'verified_by');
    }
    
    public function payment() {
        return $this->hasOne(Payment::class);
    }    
}
