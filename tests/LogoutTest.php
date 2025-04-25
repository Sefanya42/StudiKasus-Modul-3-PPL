<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    public function test_user_can_logout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') 
                    ->clickLink('Log in') 
                    ->type('email', 'sefanyasantoso@gmail.com') 
                    ->type('password', '12345678') 
                    ->press('LOG IN') 

                    
                    ->clickLink('Logout') 
                    ->assertPathIs('/'); 
        });
    }
}
