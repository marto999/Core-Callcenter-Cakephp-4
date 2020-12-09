<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Estadopago;
use Authorization\IdentityInterface;

/**
 * Estadopago policy
 */
class EstadopagoPolicy
{
    /**
     * Check if $user can create Estadopago
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Estadopago $estadopago
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Estadopago $estadopago)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Estadopago
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Estadopago $estadopago
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Estadopago $estadopago)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Estadopago
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Estadopago $estadopago
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Estadopago $estadopago)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Estadopago
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Estadopago $estadopago
     * @return bool
     */
    public function canView(IdentityInterface $user, Estadopago $estadopago)
    {
        return $user->role_id=='1';
    }
}
