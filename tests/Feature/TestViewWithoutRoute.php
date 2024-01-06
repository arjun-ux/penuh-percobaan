<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestViewWithoutRoute extends TestCase
{
    public function testView()
    {
        $this->view('hello', ['name' => 'Laravel'])
        ->assertDontSee('hello');
    }
}
