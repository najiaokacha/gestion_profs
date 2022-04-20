<?php

namespace App\Policies;

use App\Models\Professeurs;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfesseursPolicy
{
    use HandlesAuthorization;

        public function before($user,$ability){
            if($user->is_admin and $ability != 'delete'){
                return true;
            }
        }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Professeurs  $professeurs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Professeurs $professeurs)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Professeurs  $professeurs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Professeurs $professeurs)
    {
        return $user->id===$professeurs->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Professeurs  $professeurs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Professeurs $professeurs)
    {
        return $user->id === $professeurs->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Professeurs  $professeurs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Professeurs $professeurs)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Professeurs  $professeurs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Professeurs $professeurs)
    {
        //
    }
}
