<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MachineCondition extends Model
{
    protected $fillable = [
        'description'
    ];

    public function machines()
{
    return $this->hasMany(Machine::class, 'condition');
}

}
