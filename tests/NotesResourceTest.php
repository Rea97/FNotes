<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesResourceTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddNewNote()
    {
        $this->visit('/auth/login')
            ->type('beto@hotmail.com', 'email')
            ->type('123456', 'password')
            ->press('Entra ya!')
            ->seePageIs('/notes')
            ->see('Bienvenido Alberto')
            ->type('Nueva nota', 'titulo-nota')
            ->select('hogar', 'categoria-nota')
            ->type('Contenido de mi nueva nota', 'descripcion-nota')
            ->press('Guardar')
            ->seePageIs('/notes')
            ->seeInDatabase('notes', [
                'title' => 'Nueva nota',
                'category' => 'hogar',
                'description' => 'Contenido de mi nueva nota'
            ])
            ->see('Contenido de mi nueva nota');
    }
}
