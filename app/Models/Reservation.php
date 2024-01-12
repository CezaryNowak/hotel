<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $fillable = [
        'roomId',
        'userId',
        'checkInDate',
        'checkOutDate',
        'canceled',
    ];
}
