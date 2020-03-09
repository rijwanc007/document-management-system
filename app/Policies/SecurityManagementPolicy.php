<?php

namespace App\Policies;

use App\User;
use App\SecurityManagement;
use Illuminate\Auth\Access\HandlesAuthorization;

class SecurityManagementPolicy
{
    use HandlesAuthorization;
    public function show(User $user){
        foreach($user->roles as $role){
            foreach ($role->permissions as $permission){
                if($permission->id == 46){
                    return true;
                }
            }
        }
        return false;
    }
}
