
    <x-app-layout>
 
    <form method="POST" action="{{ route('patient.update', ['patient' =>$patient]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input value="{{ $patient->first_name }}" type="text" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input value="{{ $patient->last_name }}" type="text" class="form-control" id="last_name" name="last_name">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input value="{{ $patient->age }}" type="text" class="form-control" id="age" name="age">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input value="{{ $patient->date_of_birth }}" type="date" class="form-control" id="date_of_birth" name="date_of_birth">
        </div>
        <div class="form-group">
            <label for="sex">Sex</label>
            <div class="form-check">
                
                <input class="form-check-input" type="radio" name="sex" id="male" value="male" checked="{{$patient->sex =='male' ? 'true' : 'false' }}">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="female" value="female" checked="{{$patient->sex =='male' ? 'true' : 'false' }}">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <div class="form-group">
            <label for="race">Race</label>
            <select class="form-control" id="race" name="race">
                <option value="white">White</option>
                <option value="black_african_american">Black/African American</option>
                <option value="asian">Asian</option>    
                <option value="hawaiian_pacific_islander">Hawaiian/Pacific Islander</option>
                <option value="american_indian_native_american">American Indian/Native American</option>
                <option value="unknown">Unknown</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ethnicity">Ethnicity</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ethnicity" id="hispanic_or_latino" value="hispanic_or_latino" {{$patient->ethnicity =='hispanic_or_latino' ? 'checked' : '' }}>
                <label class="form-check-label" for="hispanic_or_latino">Hispanic or Latino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ethnicity" id="not_hispanic_or_latino" value="not_hispanic_or_latino" {{$patient->ethnicity =='not_hispanic_or_latino' ? 'checked' : '' }}>
                <label class="form-check-label" for="not_hispanic_or_latino">Not Hispanic or Latino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ethnicity" id="unknown" value="unknown" {{$patient->ethnicity =='unknown' ? 'checked' : '' }}>
                <label class="form-check-label" for="unknown">Unknown</label>
            </div>
        </div>
        <div class="form-group">
            <label for="born_in_us">Was the patient born in the United States?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="born_in_us" id="yes" value="1">
                <label class="form-check-label" for="yes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="born_in_us" id="no" value="0">
                <label class="form-check-label" for="no">No</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="born_in_us" id="unknown" value="unknown">
                <label class="form-check-label" for="unknown">Unknown</label>
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">Country of Birth</label>
            <input type="text" class="form-control" id="country_of_birth" name="country_of_birth" value="{{ $patient->country_of_birth }}">
        </div>
        <div class="form-group">
            <label for="year_emigrated_to_us">Year emigrated to U.S</label>
            <input type="date" class="form-control" id="year_emigrated_to_us" name="year_emigrated_to_us" value="{{ $patient->year_emigrated_to_us }}">
            <div class="form-group">
                <label for="place_of_residence">Place of Residence</label>
                <input type="text" class="form-control" id="place_of_residence" name="place_of_residence" value="{{ $patient->place_of_residence }}" >
            </div>
            <div class="form-group">
                <label for="phone_1">Phone 1</label>
                <input type="text" class="form-control" id="phone_1" name="phone_1"value="{{ $patient->phone_1 }}" >
            </div>
            <div class="form-group">
                <label for="phone_2">Phone 2</label>
                <input type="text" class="form-control" id="phone_2" name="phone_2" value="{{ $patient->phone_2 }}">
            </div>
            <div class="form-group">
                <label for="institutional_setting">Does patient live in an institutional setting?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="institutional_setting" id="yes" value="1">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="institutional_setting" id="no" value="0">
                    <label class="form-check-label" for="no">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="institutional_setting" id="unknown" value="unknown">
                    <label class="form-check-label" for="unknown">Unknown</label>
                </div>
            </div>
            <div class="form-group">
                <label for="facility_name">Name of facility</label>
                <input type="text" class="form-control" id="facility_name" name="facility_name">
            </div>
            <div class="form-group">
                <label for="room_number">Room Number</label>
                <input type="text" class="form-control" id="room_number" name="room_number">
            </div>
            <div class="form-group">
                <label for="type_of_facility">Type of Facility</label>
                <select class="form-control" id="type_of_facility" name="type_of_facility" >
                    <option value="nursing_home_longterm_care_facility">Nursing Home/Long-term care facility</option value="nursing_home_longterm_care_facility" {{$patient->type_of_facility =='nursing_home_longterm_care_facility' ? 'checked' : '' }}>
                    <option value="residential_program_treatment_facility">Residential program/treatment facility</option value="residential_program_treatment_facility" {{$patient->type_of_facility =='residential_program_treatment_facility' ? 'checked' : '' }}>
                    <option value="shelter">Shelter</option value="shelter" {{$patient->type_of_facility =='shelter' ? 'checked' : '' }}>
                    <option value="jail_prison">Jail/Prison</option value="jail/prison" {{$patient->type_of_facility =='jail/prison' ? 'checked' : '' }}>
                    <option value="other">Other</option value="other" {{$patient->type_of_facility =='other' ? 'checked' : '' }}>
                </select>
            </div>
            <div class="form-group">
                <label for="date_of_illness_onset">Date of Illness Onset</label>
                <input type="date" class="form-control" id="date_of_illness_onset" name="date_of_illness_onset">
            </div>
            <div class="form-group">
                <label for="evaluated_by_physician">Was the patient evaluated by a physician for the illness?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="evaluated_by_physician" id="yes" value="1">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="evaluated_by_physician" id="no" value="0">
                    <label class="form-check-label" for="no">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="evaluated_by_physician" id="unknown" value="unknown">
                    <label class="form-check-label" for="unknown">Unknown</label>
                </div>
            </div>
            <div class="form-group">
                <label for="evaluated_at_emergency_room">Was the patient evaluated at an emergency room for this illness?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="evaluated_at_emergency_room" id="yes" value="1">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="evaluated_at_emergency_room" id="no" value="0">
                    <label class="form-check-label" for="no">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="evaluated_at_emergency_room" id="unknown" value="unknown">
                    <label class="form-check-label" for="unknown">Unknown</label>
                </div>
            </div>
            <div class="form-group">
                <label for="hospitalized">Was the patient hospitalized for this illness?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hospitalized" id="yes" value="1">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hospitalized" id="no" value="0">
                    <label class="form-check-label" for="no">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hospitalized" id="unknown" value="unknown">
                    <label class="form-check-label" for="unknown">Unknown</label>
                </div>
            </div>
            <div class="form-group">
                <label for="date_first_hospitalized">Date first hospitalized</label>
                <input type="date" class="form-control" id="date_first_hospitalized" name="date_first_hospitalized">
            </div>
            <div class="form-group">
                <label for="discharged">Has the patient been discharged?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="discharged" id="yes" value="1">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="discharged" id="no" value="0">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="date_discharged">Date discharged</label>
                <input type="date" class="form-control" id="date_discharged" name="date_discharged">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
                                
    </x-app-layout>