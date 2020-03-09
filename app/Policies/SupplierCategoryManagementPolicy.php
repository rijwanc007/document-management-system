<?php

namespace App\Policies;

use App\User;
use App\SupplierCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupplierCategoryManagementPolicy
{
    use HandlesAuthorization;
    public function addCategory(User $user){
        return $this->getThePermission($user,27);
    }
    public function categoryDelete(User $user){
        return $this->getThePermission($user,28);
    }
    public function categoryEdit(User $user){
        return $this->getThePermission($user,29);
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
