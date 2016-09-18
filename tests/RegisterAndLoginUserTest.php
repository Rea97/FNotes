<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterAndLoginUserTest extends TestCase
{
    /**
     * Prueba para el registro de un usuario
     *
     * @return void
     */
    public function testUserRegister()
    {
        $this->visit('auth/register')
            ->type('Alberto', 'name')
            ->type('beto@hotmail.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->press('Entra ya!')
            ->seeInDatabase('users', ['name' => 'Alberto', 'email' => 'beto@hotmail.com'])
            ->seePageIs('/home');
    }
    /**
     * Prueba para el inicio de sesión
     * @return void
     */
    public function testUserLogin()
    {
        $this->visit('/auth/login')
            ->type('beto@hotmail.com', 'email')
            ->type('123456', 'password')
            ->press('Sign in!')
            ->seePageIs('/home');
    }
}
