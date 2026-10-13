<?php

declare(strict_types=1);

test('health check returns 200', function (): void {
    $this->get('/up')->assertOk();
});
