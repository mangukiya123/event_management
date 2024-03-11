<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upcomming_events extends Model
{
    protected $table = 'upcomming_events';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['main_title','sub_title1','sub_title2','information','time','place','event_details','image','book_ticket'];
}
