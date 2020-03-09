<?php

namespace App\Policies;

use App\User;
use App\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RollManagementPolicy
{
    use HandlesAuthorization;
    public function manageRoll(User $user){
        return $this->getThePermission($user,41);
    }
    public function addRoll(User $user){
        return $this->getThePermission($user,42);
    }
    public function rollDelete(User $user){
        return $this->getThePermission($user,43);
    }
    public function rollEdit(User $user){
        return $this->getThePermission($user,44);
    }
    public function getThePermission($user,$p_id){
        foreach($user->roles as $role){
            foreach($role->permissions as $permission){
                if($permission->id == $p_id){
                    return true;
                }
            }
        }
        return false;
    }
}
