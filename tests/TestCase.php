<?php

namespace Dchymko\RwgpsImporter\Tests;

use Dchymko\RwgpsImporter\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
