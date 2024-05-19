<?php

namespace Salehhashemi\OtpManager\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Salehhashemi\OtpManager\OtpManagerServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app): array
    {
        return [OtpManagerServiceProvider::class];
    }
}
