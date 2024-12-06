<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Casts;

use Tests\Fixtures\User;

it('should get the UUID as a string', function (): void {
    expect(User::factory()->make()->uuid)->toBeString();
});
