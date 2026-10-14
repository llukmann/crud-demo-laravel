<?php

declare(strict_types=1);

it('returns 404 as JSON for an unknown API route', function (): void {
    $this->get('/api/unknown')
        ->assertNotFound()
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson(['message' => 'The route api/unknown could not be found.']);
});

it('returns 404 as JSON for an unknown route outside the API prefix', function (): void {
    $this->get('/unknown')
        ->assertNotFound()
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson(['message' => 'The route unknown could not be found.']);
});
