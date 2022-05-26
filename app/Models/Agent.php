<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        "agent_ID",
        "agent_name",
        "agent_address",
        "agent_nationality",
        "agent_contact_person",
        "agent_phone",
        "agent_email",
        "agent_fax_number",
        "agent_office_phone",
        "agent_future_email",
        "agent_status"
    ];
}
