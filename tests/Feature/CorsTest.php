<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CorsTest extends TestCase
{
    #[Test]
    public function it_allows_preflight_requests_for_api_routes(): void
    {
        $response = $this->withHeaders([
            'Origin' => 'http://example.com',
            'Access-Control-Request-Method' => 'PUT',
            'Access-Control-Request-Headers' => 'Content-Type',
        ])->options('/api/members');

        $response->assertStatus(204);
        $response->assertHeader('Access-Control-Allow-Origin', '*');
        $response->assertHeader('Access-Control-Allow-Methods');
        $response->assertHeader('Vary');
    }
}

