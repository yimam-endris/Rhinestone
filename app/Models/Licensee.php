<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licensee extends Model
{
    use HasFactory;

    protected $fillable = [
        "Licensee_ID",
        "Licensee_Name",
        "Licensee_Address",
        "Licensee_Email",
        "Licensee_Phone",
        "Nationality",
        "Country_of_Registration",
        "Date_of_Incorporation",
        "Notes"
    ];
}
