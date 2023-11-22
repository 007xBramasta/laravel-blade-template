<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisableTest extends TestCase
{
    public function testDisable()
    {
        $this->view("disable", ["name" => "Bram"])
            ->assertDontSeeText("Bram")
            ->assertSeeText('Hello {{$name}}');
    }
}
