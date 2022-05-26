<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        "applicant_ID",
        "applicant_name",
        "applicant_email",
        "applicant_phone",
        "applicant_address",
        "applicant_nationality",
        "country_of_registration",
        "date_of_incorporation",
        "note",
        "applicant_status"
    ];
}
