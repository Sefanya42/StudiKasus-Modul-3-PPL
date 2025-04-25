<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    public function test_user_can_edit_note()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->type('email', 'sefanyasantoso@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')

                    ->clickLink('Notes')
                    ->clickLink('Edit')
                    ->assertPathIs('/edit-note-page/1')
                    ->type('title', 'Praktikum')
                    ->type('description', 'Praktikum PPL')
                    ->press('UPDATE');
        });
    }
}
