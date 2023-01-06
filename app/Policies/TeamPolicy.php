<?php

namespace App\Policies;

use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Log;
use function Psy\debug;

class TeamPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function viewAny(User $user, Team $team)
    {
        if($user->hasTeamPermission($team, 'update')){
        return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function view(User $user, Team $team)
    {
        Log::debug($user);
        Log::alert($team);
        //get current team

        if($user->hasTeamPermission($team, 'update')){
            return $user->belongsToTeam($team);
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function create(User $user, Team $team)
    {
        //if last user has access return false

        $currentTeam = $user->currentTeam;

        if($user->hasTeamPermission($currentTeam, 'update')){
            return true;
           //use logic to check if user is last user


        }
        return false;

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function update(User $user, Team $team)
    {
        Log::debug($user);
        Log::alert($team);
        if($user->hasTeamPermission($team, 'update')){
        return $user->ownsTeam($team);
    }else{
        return false;}
    }

    /**
     * Determine whether the user can add team members.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function addTeamMember(User $user, Team $team)
    {
        if($user->hasTeamPermission($team, 'update')){
        return $user->ownsTeam($team);
        }else{
        return false;}
    }

    /**
     * Determine whether the user can update team member permissions.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function updateTeamMember(User $user, Team $team)
    {
        if($user->hasTeamPermission($team, 'update')){
        return $user->ownsTeam($team);
        }else{
        return false;}
    }

    /**
     * Determine whether the user can remove team members.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function removeTeamMember(User $user, Team $team)
    {
         if($user->hasTeamPermission($team, 'update')){
        return $user->ownsTeam($team);
         }else{
        return false;}
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Team  $team
     * @return mixed
     */
    public function delete(User $user, Team $team)
    {
        if($user->hasTeamPermission($team, 'update')){
        return $user->ownsTeam($team);
        }else{
        return false;}
    }
}
