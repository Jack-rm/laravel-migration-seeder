<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public $table = "travels";
    protected $fillable = ['name','destination_city','destination_country','accomodation','price','travel_days','date_departure','date_return','airline_company','participants','is_available','description','slug'];
}
