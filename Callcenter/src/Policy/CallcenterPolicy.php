<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Callcenter;
use Authorization\IdentityInterface;

/**
 * Callcenter policy
 */
class CallcenterPolicy
{
    /**
     * Check if $user can create Callcenter
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Callcenter $callcenter
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Callcenter $callcenter)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Callcenter
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Callcenter $callcenter
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Callcenter $callcenter)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Callcenter
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Callcenter $callcenter
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Callcenter $callcenter)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Callcenter
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Callcenter $callcenter
     * @return bool
     */
    public function canView(IdentityInterface $user, Callcenter $callcenter)
    {
        return $user->role_id=='1';
    }
}
