<?php

namespace App\Policies;

use App\User;
use App\ContactManagement;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactManagementPolicy
{
    use HandlesAuthorization;
    public function allContact(User $user){
        return $this->getThePermission($user,33);
    }
    public function addContact(User $user){
        return $this->getThePermission($user,34);
    }
    public function contactDelete(User $user){
        return $this->getThePermission($user,35);
    }
    public function contactEdit(User $user){
        return $this->getThePermission($user,36);
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
