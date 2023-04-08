<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @internal
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Schema::dropAllTables();

        $this->app['db']->connection()->getSchemaBuilder()->create('posts', function (Blueprint $table): void {
            $table->increments('id');
            $table->binary('uuid');
            $table->string('name');
        });
    }
}
