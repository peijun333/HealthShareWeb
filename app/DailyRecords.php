<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyRecords extends Model{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = 'daily_records';
    protected $low = ['low_blood_pressure'];
    protected $high = ['low_blood_pressure'];
    protected $weight = ['weight'];
    protected $fat = ['fat'];
}
