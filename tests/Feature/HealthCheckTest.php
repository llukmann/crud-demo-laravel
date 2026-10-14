<?php

declare(strict_types=1);

it('returns 200 from the health check endpoint', function (): void {
    $this->get('/up')->assertOk();
});
