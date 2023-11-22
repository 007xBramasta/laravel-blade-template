<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testInheritance()
    {
        $this->view("child", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Deskirpsi Header")
            ->assertDontSeeText("Default Content")
            ->assertSeeText("Ini adalah halaman utama");
    }

    public function testInheritanceWihtoutOverride()
    {
        $this->view("child-default", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content")
            ->assertDontSeeText("Deskirpsi Header")
            ->assertDontSeeText("Ini adalah halaman utama");
    }
}
