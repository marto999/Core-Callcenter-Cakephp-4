<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Cliente;
use Authorization\IdentityInterface;

/**
 * Cliente policy
 */
class ClientePolicy
{
    /**
     * Check if $user can create Cliente
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Cliente $cliente
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Cliente $cliente)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Cliente
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Cliente $cliente
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Cliente $cliente)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Cliente
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Cliente $cliente
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Cliente $cliente)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Cliente
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Cliente $cliente
     * @return bool
     */
    public function canView(IdentityInterface $user, Cliente $cliente)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }
}
