<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralConditions extends Model
{
    use HasFactory;

    protected $table = 'general_conditions';

    protected $fillable = [
        'conditions',
        'insert_userid',
        'insert_datetime',
        'update_userid',
        'update_datetime',
        'delete_userid',
        'delete_datetime',
        'status',
        'customer_key'
    ];

    public $timestamps = false;
}
