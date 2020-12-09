<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Campaña;
use Authorization\IdentityInterface;

/**
 * Campaña policy
 */
class CampañaPolicy
{
    /**
     * Check if $user can create Campaña
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Campaña $campaña
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Campaña $campaña)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Campaña
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Campaña $campaña
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Campaña $campaña)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Campaña
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Campaña $campaña
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Campaña $campaña)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Campaña
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Campaña $campaña
     * @return bool
     */
    public function canView(IdentityInterface $user, Campaña $campaña)
    {
        return $user->role_id=='1';
    }
}
