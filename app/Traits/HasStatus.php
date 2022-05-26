<?php

namespace App\Traits;

trait HasStatus
{
    /**
     * Check if an object has a certain status/group of statuses
     *
     * @param array|string $status
     * @return bool
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function hasStatus($status): bool
    {
        //  Ensure that the role(s) is recieved as an array
        $status = is_array($status) ? $status : [$status];

        //  Check if a user status is in the array
        return in_array(
            $this->getRawOriginal('status'), $status
        );
    }

    /**
     * Set the status of then object
     *
     * @param string $status
     * @return void
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function setStatus($status): void
    {
        //  Update the status to a particular status
        $this->update(['status' => $status]);
    }
}
