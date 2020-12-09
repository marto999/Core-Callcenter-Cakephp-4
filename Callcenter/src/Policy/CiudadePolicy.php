<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Ciudade;
use Authorization\IdentityInterface;

/**
 * Ciudade policy
 */
class CiudadePolicy
{
    /**
     * Check if $user can create Ciudade
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ciudade $ciudade
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Ciudade $ciudade)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Ciudade
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ciudade $ciudade
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Ciudade $ciudade)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Ciudade
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ciudade $ciudade
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Ciudade $ciudade)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Ciudade
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ciudade $ciudade
     * @return bool
     */
    public function canView(IdentityInterface $user, Ciudade $ciudade)
    {
        return $user->role_id=='1';
    }
}
