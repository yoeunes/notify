<?php

namespace Yoeunes\Notify\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Yoeunes\Notify\NotifyServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NotifyServiceProvider::class,
        ];
    }
}
