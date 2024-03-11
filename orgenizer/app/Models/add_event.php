<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_event extends Model
{
    protected $table = 'add_events';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['event_date' , 'event_time' , 'event_image' , 'event_start_date_booking' , 'event_detail' , 'event_organize_team_name' , 'event_price' , 'event_place' , 'event_city' , 'event_address' , 'speacker_name'];
}
