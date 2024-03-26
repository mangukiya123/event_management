<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventinformations extends Model
{
    protected $table = 'eventinformations';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name','event_date','event_time','event_details','event_price','event_place','event_city','event_address','image','start_date_booking','event_organization_team_nme','event_speaker_nae','max_seats','cat_id'];
}
