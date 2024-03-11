<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org_team extends Model
{
    protected $table = 'org_teams';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['org_team_name' , 'org_team_email' , 'org_team_about' , 'org_team_images' , 'org_team_contact' , 'org_team_city'];
}
