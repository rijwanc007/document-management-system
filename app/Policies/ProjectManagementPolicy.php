<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectManagementPolicy
{
    use HandlesAuthorization;
    public function allProject(User $user){
        return $this->getThePermission($user,8);
    }
    public function addProject(User $user){
        return $this->getThePermission($user,12);
    }
    public function downloadProject(User $user){
        return $this->getThePermission($user,9);
    }
    public function manageProject(User $user){
        return $this->getThePermission($user,10);
    }
    public function deleteProject(User $user){
        return $this->getThePermission($user,11);
    }
    public function previewProject(User $user){
        return $this->getThePermission($user,51);
    }
    public function singleDownload(User $user){
        return $this->getThePermission($user,52);
    }
    public function singleDelete(User $user){
        return $this->getThePermission($user,53);
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
