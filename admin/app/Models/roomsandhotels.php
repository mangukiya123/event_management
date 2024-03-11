<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomsandhotels extends Model
{
    protected $table = 'roomsandhotels';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name','image','ratting','setting','details','image','price','location'];
}
