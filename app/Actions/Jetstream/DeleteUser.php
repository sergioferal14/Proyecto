<?php

namespace App\Actions\Jetstream;

use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        if($user->profile_photo_path != 'avatar.png'){
            $user->deleteProfilePhoto();
        }
        
        $user->tokens->each->delete();
        $user->delete();
    }
}
