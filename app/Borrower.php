<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'mobile_no',
        'residence',
        'coordinates',
        'id_no',
        'id_imageurl',
        'photourl',
        'signatureurl'
    ];
}
