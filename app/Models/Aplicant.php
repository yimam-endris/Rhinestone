<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicant extends Model
{
    use HasFactory;
    protected $fillable = [
        "reference_number",
        "file_open_date",
        "title",
        "status",
        "date_of_invention",
        "keyword",
        "center_code",
        "joint_venture_with",
        "cost_center",
        "joint_venture",
        "agreement_place",
        "primary_attorney",
        "secondary_attorney",
        "primary_paralegal",
        "secondary_paralegal",
        "invention_description",
        "general_notes",
        "proposed_investors",
        "confirmed_investors",
        "approved_for_filing",
        "date_of_approval",
        "reason"
    ];
}
