<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeeManagementPolicy
{
    use HandlesAuthorization;
    public function allEmployee(User $user){
        return $this->getThePermission($user,37);
    }
    public function addEmployee(User $user){
        return $this->getThePermission($user,38);
    }
    public function employeeDelete(User $user){
        return $this->getThePermission($user,39);
    }
    public function employee_edit(User $user){
        return $this->getThePermission($user,40);
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
