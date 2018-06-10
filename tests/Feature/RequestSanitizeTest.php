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
    public function request_replace_must_replace_all_inputs_on_put_request()
    {
        $this->json('put','/sanitize')->assertJson([
            'name' => 'Test'
        ]);
    }

    /**
     * @test
     */
    public function request_replace_must_replace_all_inputs_on_post_request()
    {
        $this->json('post','/sanitize')->assertJson([
            'name' => 'Test'
        ]);
    }

    /**
     * @test
     */
    public function request_replace_must_replace_all_inputs_on_get_request()
    {
        $this->json('get','/sanitize')->assertJson([
            'name' => 'Test'
        ]);
    }
}
