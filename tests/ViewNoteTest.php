<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TampilNoteTest extends DuskTestCase
{
    public function test_user_can_see_notes()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->type('email', 'sefanyasantoso@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')

                    ->clickLink('Notes')
                    ->assertPathIs('/notes');
        });
    }
}
