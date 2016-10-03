<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Note;

class NotePolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function authChangesOnUserNote(User $user, Note $note)
    {
        return $user->id === $note->user_id;
    }

}
