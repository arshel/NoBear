<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'example_locations';

    protected $fillable = ['company_name', 'street', 'street_number',
        'postal_code', 'city', 'country', 'latitude', 'longitude', 'email'];


    public $timestamps = false;

}
