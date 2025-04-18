<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MachineType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'operation'
    ];
    
    public function machines()
{
    return $this->hasMany(Machine::class, 'machine_type');
}

}
