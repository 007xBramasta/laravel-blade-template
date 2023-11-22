<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("bramasta");
    }

    public function testHelloWorld()
    {
        $this->get("/world")
            ->assertSeeText("bramasta");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "bramasta"])
            ->assertSeeText("bramasta");
    }

    public function testWorldView()
    {
        $this->view("hello.world", ["name" => "bramasta"])
            ->assertSeeText("bramasta");
    }

    
}
