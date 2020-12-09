<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Script;
use Authorization\IdentityInterface;

/**
 * Script policy
 */
class ScriptPolicy
{
    /**
     * Check if $user can create Script
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Script $script
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Script $script)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can update Script
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Script $script
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Script $script)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can delete Script
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Script $script
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Script $script)
    {
        return $user->role_id=='1';
    }

    /**
     * Check if $user can view Script
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Script $script
     * @return bool
     */
    public function canView(IdentityInterface $user, Script $script)
    {
        return $user->role_id=='1';
    }
}
