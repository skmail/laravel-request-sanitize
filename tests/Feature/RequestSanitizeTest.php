<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequestSanitizeTest extends TestCase
{

    /**
     * @test
     */
    public function request_replace_must_replace_all_inputs()
    {
        $this->json('put','/sanitize')->assertJson([
            'name' => 'Test'
        ]);
    }
}
