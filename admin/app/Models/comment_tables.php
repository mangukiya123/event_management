<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_tables extends Model
{
    protected $table = 'comment_tables';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name','cmt','event_id','customer_id','proffession','cmt_date'];
}
