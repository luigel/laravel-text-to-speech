<?php

namespace Luigel\TextToSpeech\Tests;

use Luigel\TextToSpeech\Providers\TextToSpeechServiceProvider;
use Orchestra\Testbench\TestCase;

class TextToSpeechTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [TextToSpeechServiceProvider::class];
    }
}
