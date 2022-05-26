<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licensor extends Model
{
    use HasFactory;

    protected $fillable = [
        "Licensor_ID",
        "Last_Name",
        "Given_Name",
        "Nationality",
        "Phone_Number",
        "Home_Address",
        "Employer",
        "Employer_Address",
        "Date_of_Termination",
        "Date_of_Commencement",
        "Contractor",
        "ContractorType",
        "Date_of_Contract",
        "Email_of_Future_Contact",
        "Notes"
    ];
}
