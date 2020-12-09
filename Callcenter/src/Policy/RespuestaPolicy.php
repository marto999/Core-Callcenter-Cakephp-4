<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Respuesta;
use Authorization\IdentityInterface;

/**
 * Respuesta policy
 */
class RespuestaPolicy
{
    /**
     * Check if $user can create Respuesta
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Respuesta $respuesta
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Respuesta $respuesta)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Respuesta
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Respuesta $respuesta
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Respuesta $respuesta)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Respuesta
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Respuesta $respuesta
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Respuesta $respuesta)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Respuesta
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Respuesta $respuesta
     * @return bool
     */
    public function canView(IdentityInterface $user, Respuesta $respuesta)
    {
        return $user->role_id=='1';
    }
}
