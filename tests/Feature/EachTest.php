<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Bram",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Albatio",
                "hobbies" => ["Coding", "Gaming"]
            ]
            ]])
                ->assertSeeInOrder([".red", "Bram", "Coding", "Gaming", "Albatio", "Coding", "Gaming"]);
    }
}
