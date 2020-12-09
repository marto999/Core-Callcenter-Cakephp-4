<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Operadora;
use Authorization\IdentityInterface;

/**
 * Operadora policy
 */
class OperadoraPolicy
{
    /**
     * Check if $user can create Operadora
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Operadora $operadora
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Operadora $operadora)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Operadora
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Operadora $operadora
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Operadora $operadora)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Operadora
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Operadora $operadora
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Operadora $operadora)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Operadora
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Operadora $operadora
     * @return bool
     */
    public function canView(IdentityInterface $user, Operadora $operadora)
    {
        return $user->role_id=='1';
    }
}
