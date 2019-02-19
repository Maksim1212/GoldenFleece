<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRooms extends Model
{
    protected $fillable=  ['start-date','finish-date','hotel_type_select','persons','name_surname','phone'];
}
