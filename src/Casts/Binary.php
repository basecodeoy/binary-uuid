<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\BinaryUuid\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Ramsey\Uuid\Uuid;

final class Binary implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string                              $key
     * @param  mixed                               $value
     * @param  array                               $attributes
     * @return mixed
     */
    #[\Override()]
    public function get($model, $key, $value, $attributes)
    {
        if (blank($value)) {
            return null;
        }

        return Uuid::fromBytes($value)->toString();
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string                              $key
     * @param  mixed                               $value
     * @param  array                               $attributes
     * @return mixed
     */
    #[\Override()]
    public function set($model, $key, $value, $attributes)
    {
        if (blank($value)) {
            return null;
        }

        return [
            $key => Uuid::fromString(\mb_strtolower((string) $value))->getBytes(),
        ];
    }
}
