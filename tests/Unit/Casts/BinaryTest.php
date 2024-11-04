<?php

declare(strict_types=1);

namespace Tests\Unit\Casts;

use Tests\Fixtures\User;

it('should get the UUID as a string', function (): void {
    expect(User::factory()->make()->uuid)->toBeString();
});
