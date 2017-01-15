<?php

namespace App\Repositories;

use App\User;
use App\Note;

class NoteRepository
{
    /**
     * @var Note
     */
    protected $note;

    /**
     * NoteRepository constructor.
     *
     * @param Note $note
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Retorna las notas pertenecientes al usuario actual.
     *
     * @param User $user
     *
     * @return mixed
     */
    public function forUser(User $user)
    {
        return $this->note->where('user_id', $user->id)
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
        return $this->note->where('user_id', $user->id)
                    ->where(function ($query) use ($search) {
                        $query->where('title', 'LIKE', "%{$search}%")
                            ->orWhere('content', 'LIKE', "%{$search}%");
                    })
                    //->where('title', 'LIKE', "%{$search}%")
                    //->orWhere('content', 'LIKE', "%{$search}%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);
    }
}