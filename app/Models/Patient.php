<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patient_info";

    protected $fillable = [
        'first_name', 
        'last_name', 
        'age', 
        'date_of_birth', 
        'sex', 
        'race',
        'ethnicity', 
        'born_in_us', 
        'country_of_birth', 
        'year_emigrated_to_us', 
        'address', 
        'city',
        'state', 
        'zip', 
        'county', 
        'country', 
        'phone_1', 
        'phone_2',
        'institutional_setting',
        'facility_name',
        'place_of_residence', 
        'room_number', 
        'facility_type', 
        'date_of_illness_onset',
        'evaluated_by_physician', 
        'evaluated_at_emergency_room', 
        'hospitalized', 
        'date_first_hospitalized',
        //'discharged', 
        'date_discharged'
    ];
}
