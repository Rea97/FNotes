<?php

namespace App\Repositories;

use App\User;
use App\Note;

class NoteRepository
{
    /**
     * Retorna las notas pertenecientes al usuario actual.
     *
     * @param User $user
     *
     * @return mixed
     */
    public function forUser(User $user)
    {
        return Note::where('user_id', $user->id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(12);
    }

    /**
     * Retorna el resultado de la busqueda de notas realizada por el usuario actual.
     *
     * @param User $user
     * @param      $search
     *
     * @return mixed
     */
    public function forUserSearch(User $user, $search)
    {
        return Note::where('user_id', $user->id)
                    ->where('title', 'LIKE', "%{$search}%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);
    }
}