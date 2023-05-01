<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'telephone',
        'organization',
        'position',
        'number_of_employees',
        'list_post_ids',
        'is_blocked',
        'type',
        'latitude',
        'longitude',
        'website',
        'address',
        'open_time',
        'ticket_price',
        'original_url',
    ];
}
