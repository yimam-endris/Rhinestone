<?php

namespace App\Traits;

use Illuminate\Support\Facades\Route;

trait HasAuthorizationChecks
{
    /**
     * Check if the user can view any part of the portal
     *
     * @return bool
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function canViewPortal(): bool
    {
        //  Get the current authenticated user and their 
        //  organization if it exists
        $organization = $this->organization;

        //  Check for inactive users or organizations
        if(!$this->hasStatus('ACTIVE') || ($organization && !$organization->hasStatus('ACTIVE'))) {
            return false;
        }  

        // //  Handle trainers
        // if($this->isATrainer() && !$this->getTrainerProfile()->hasStatus(['PREQUALIFIED', 'UNAVAILABLE'])) {
        //     return false;
        // } 
        
        //  Return a default true
        return true;
    }
}