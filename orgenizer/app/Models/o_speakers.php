<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class o_speakers extends Model
{
    protected $table = 'o_speakers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['speaker_name' , 'speaker_email' , 'speaker_image' , 'speaker_contact' , 'speaker_date' , 'speaker_time' , 'speaker_city' , 'speaker_info','experience'];
}
