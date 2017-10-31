<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsitutionUser extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'institution_users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['inst_id', 'user_id'];
}
