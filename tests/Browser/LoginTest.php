<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'destroyer18203@hotmail.com')
                    ->type('password', 'Luna1010@')
                    ->click('button[type="submit"]')
                    ->assertPathIs( path:'/home');
        });
    }

}
