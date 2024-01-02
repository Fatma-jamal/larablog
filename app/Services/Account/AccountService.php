<?php

namespace App\Services\Account;

use App\Models\Account\User;
use App\Models\Account\Role;

class AccountService
{
    public function singninUandP(string $username, string $password) : bool
    {
        //TODO
        return false;
    }
    public function singnin(User $auth) : bool
    {
        //TODO
        return false;
    }

    public function singnup()
    {
        
    }

    public function assignUserToRole(User $user, Role $role) : bool
    {

        return false;
    }

    public function listUserRoles(string $username) : array
    {

        return array();
    }
}