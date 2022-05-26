<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $fillable = [
        "InvestorID",
        "InvestorLastName",
        "InvestorGivenName",
        "InvestorPhone",
        "InvestorEmail",
        "Date_of_Termination",
        "Contractor",
        "ContractorType",
        "Date_of_Contract",
        "Date_of_Commencement",
        "Nationality",
        "Home",
        "Country",
        "Zip_Code",
        "Employer_Name",
        "Employer_Address",
        "Employer_Nationality",
        "Email_of_Future_Contact",
        "Notes"
    ];
}
