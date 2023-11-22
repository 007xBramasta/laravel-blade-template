<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "Bram";
        $person->address = "Indonesia";

        $this->view("echo", ["person" => $person])
            ->assertSeeText("Bram : Indonesia");
    }
}
