<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Fixtures;

use BaseCodeOy\BinaryUuid\Casts\Binary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $casts = [
        'uuid' => Binary::class,
    ];

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
