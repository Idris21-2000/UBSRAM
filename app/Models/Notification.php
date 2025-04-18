<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'content',
        'from',
        'to'
    ];

    public function sender()
{
    return $this->belongsTo(User::class, 'from');
}

public function recipient()
{
    return $this->belongsTo(User::class, 'to');
}

}
