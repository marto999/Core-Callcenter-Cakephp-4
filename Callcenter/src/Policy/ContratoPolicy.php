<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Contrato;
use Authorization\IdentityInterface;

/**
 * Contrato policy
 */
class ContratoPolicy
{
    /**
     * Check if $user can create Contrato
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Contrato $contrato
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Contrato $contrato)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Contrato
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Contrato $contrato
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Contrato $contrato)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Contrato
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Contrato $contrato
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Contrato $contrato)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Contrato
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Contrato $contrato
     * @return bool
     */
    public function canView(IdentityInterface $user, Contrato $contrato)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }
}
