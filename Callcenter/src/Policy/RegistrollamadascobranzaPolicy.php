<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Registrollamadascobranza;
use Authorization\IdentityInterface;

/**
 * Registrollamadascobranza policy
 */
class RegistrollamadascobranzaPolicy
{
    /**
     * Check if $user can create Registrollamadascobranza
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Registrollamadascobranza $registrollamadascobranza
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Registrollamadascobranza $registrollamadascobranza)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }

    /**
     * Check if $user can update Registrollamadascobranza
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Registrollamadascobranza $registrollamadascobranza
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Registrollamadascobranza $registrollamadascobranza)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }

    /**
     * Check if $user can delete Registrollamadascobranza
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Registrollamadascobranza $registrollamadascobranza
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Registrollamadascobranza $registrollamadascobranza)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }

    /**
     * Check if $user can view Registrollamadascobranza
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Registrollamadascobranza $registrollamadascobranza
     * @return bool
     */
    public function canView(IdentityInterface $user, Registrollamadascobranza $registrollamadascobranza)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }
}
