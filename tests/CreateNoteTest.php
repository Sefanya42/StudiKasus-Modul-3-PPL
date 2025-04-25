<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNoteTest extends DuskTestCase
{
    public function test_user_can_create_note()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->type('email', 'sefanyasantoso@gmail.com')
                    ->type('password', '321')
                    ->press('LOG IN')

                    ->clickLink('Notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'Sefanya Kurniawan')
                    ->type('description', 'sefanyasantoso@gmail.com')
                    ->press('CREATE');
        });
    }
}
