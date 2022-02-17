<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function test_it_returns_correct_data()
    {
        $this->getJson('/home')
            ->assertOk()
            ->assertJsonStructure([
                'user'
            ])->assertJsonFragment([
                'user' => 'user'
            ]);
    }
}
