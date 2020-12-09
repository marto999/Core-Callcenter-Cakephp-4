<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Producto;
use Authorization\IdentityInterface;

/**
 * Producto policy
 */
class ProductoPolicy
{
    /**
     * Check if $user can create Producto
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Producto $producto
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Producto $producto)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Producto
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Producto $producto
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Producto $producto)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Producto
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Producto $producto
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Producto $producto)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Producto
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Producto $producto
     * @return bool
     */
    public function canView(IdentityInterface $user, Producto $producto)
    {
        return $user->role_id=='1' || $user->role_id=='2';
    }
}
