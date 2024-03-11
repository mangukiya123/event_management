<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_register extends Model
{
    protected $table = 'staff_registers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['staff_name' , 'staff_birthdate' , 'staff_address' , 'staff_email' , 'password' , 'image' , 'phone_no'];
}
