<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
							'firstname', 
							'lastname',
							'othername',
							'phone',
							'email',
							'sex',
							'dob', 
							'country',
							'religion',
							'maritalstatus',
							'city',
							'state',
							'fathername',
							'mothername',
							'motherwork',
							'fatherwork',
							'parentaddress',
							'language',
							'nokname',
							'nokcontact',
							'faculty',
							'department',
							'course',
							'specilization',
							'duration',
							'grade',
							'startdate',
							'enddate',
							'facultyhead',
							'hod',
							'disability',
							'specialneeds',
							'ca',
							'project',
							'uid',
							'schoolid',
							'userid'
							];

}
