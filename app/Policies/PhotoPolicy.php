<?php

namespace App\Policies;

use App\Photo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Photo $photo)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Photo $photo)
    {
        return $user->id === $photo->user_id;
    }

    public function delete(User $user, Photo $photo)
    {
        return $user->id === $photo->user_id;
    }

    public function restore(User $user, Photo $photo)
    {
        //
    }

    public function forceDelete(User $user, Photo $photo)
    {
        //
    }
}
