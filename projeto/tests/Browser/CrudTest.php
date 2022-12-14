<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CrudTest extends DuskTestCase
{

    public function testCadastroUsuario()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/')
            ->assertSee('ForeverPhoto')
            ->pause(5000)
            ->click('@init')
            ->assertPathIs('/login')
            ->pause(3000)
            ->type('login_usuario', 'Victor')
            ->type('senha_usuario', '123')
            ->click('@submit')
            ->pause(5000);

        });
    }
}
