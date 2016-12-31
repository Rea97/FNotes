<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/auth/register')
            ->type('Oziel', 'name')
            ->type('oz@gmail.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->press('register')
            ->seePageIs('/notes')
            ->click('Mi cuenta')
            ->seePageIs('/account')
            ->attach(base_path('public/imgs/Laravel-5.png'), 'photo')
            ->press('actualizar-imagen')
            ->seeInDatabase('users', [
                'profile_picture' => '/storage/1/profile_picture/Laravel-5.png'
            ]);
    }
}
