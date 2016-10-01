<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class DisplayNoteSelectedTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShowNote()
    {
        Note::create([
            'title' => 'Titulo de la nota',
            'content' => 'Contenido de la nota',
        ]);
        $this->visit('home/notes/1')
            ->see('Titulo de la nota');
    }
}
