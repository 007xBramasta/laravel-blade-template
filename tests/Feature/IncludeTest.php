<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
   public function testInclude()
   {
        $this->view("include", [])
            ->assertSeeText("Programmer Zaman Now")
            ->assertSeeText("Selamat datang di Website kami")
            ->assertSeeText("Selamat Datang di Web");
        
        $this->view("include", ["title" => "Bramasta"])
            ->assertSeeText("Bramasta")
            ->assertSeeText("Selamat datang di Website kami")
            ->assertSeeText("Selamat Datang di Web");    
   }


}
