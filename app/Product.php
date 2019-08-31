<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class product extends Model {
    protected $table = 'product';

    protected $fillable = [
        'p_title', 'p_type', 'p_cost','p_details','p_address','p_image','user_mobile','user_email','user_address',
        'p_role','p_datetime','user_id'
    ];
    public $timestamps = false;

}

