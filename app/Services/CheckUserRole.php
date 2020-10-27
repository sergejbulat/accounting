<?php


namespace App\Services;


use App\Models\User;

class CheckUserRole
{
    /**
     * @param User   $user
     * @param string $role
     * @return bool
     */
    public function checkUserRole(User $user, $role = 'admin'): bool
    {
        $hasRole = false;
        foreach ($user->userRules ?? [] as $userRule) {
            if (strtolower($userRule->name) == strtolower($role))
                $hasRole = true;
        }
        return $hasRole;
    }

}
