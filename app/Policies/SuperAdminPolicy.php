<?php

namespace App\Policies;

use App\User;
use App\SuperAdmin;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuperAdminPolicy
{
    use HandlesAuthorization;
    public function superAdminIndex(User $user){
        foreach($user->roles as $role){
            foreach($role->permissions as $permission){
                if($permission->id==50){
                    return true;
                }
            }
        }
        return false;
    }
}
