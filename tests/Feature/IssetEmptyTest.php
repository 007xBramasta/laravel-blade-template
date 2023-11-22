<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I dont have any hobbies", false);

        $this->view("isset-empty", ["name" => 'Bram'])
            ->assertDontSeeText("Hello, my name is Bram")
            ->assertSeeText("I dont have any hobbies", false);

        $this->view("isset-empty", ["name" => 'Bram', "hobbies" => ["Coding"]])
            ->assertDontSeeText("Hello, my name is Bram")
            ->assertSeeText("I dont have any hobbies", false);
    }
}
