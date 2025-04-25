<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    public function test_user_can_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Sefanya Kurniawan')
                    ->type('email', 'sefanyasantoso@gmail.com')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
