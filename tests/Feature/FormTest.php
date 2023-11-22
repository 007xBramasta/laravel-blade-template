<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Bram",
            "admin" => true
        ]])   
            ->assertSee("checked")
            ->assertSee("Bram")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Bram",
            "admin" => false
        ]])   
            ->assertDontSee("checked")
            ->assertSee("Bram")
            ->assertSee("readonly");    
    }
}
