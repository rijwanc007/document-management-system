<?php

namespace App\Policies;

use App\User;
use App\Supplier;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupplierManagementPolicy
{
    use HandlesAuthorization;
    public function allSupplier(User $user){
        return $this->getThePermission($user,20);
    }
    public function createSupplier(User $user){
        return $this->getThePermission($user,26);
    }
    public function printSupplier(User $user){
        return $this->getThePermission($user,21);
    }
    public function manageSupplier(User $user){
        return $this->getThePermission($user,22);
    }
    public function deleteSupplier(User $user){
        return $this->getThePermission($user,23);
    }
    public function previewSupplier(User $user){
        return $this->getThePermission($user,24);
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
