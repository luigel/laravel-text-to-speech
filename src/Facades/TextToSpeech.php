<?php

namespace Luigel\TextToSpeech\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method mixed convert(string $text, array $options) Converts text to speech
 * @see \Illuminate\Cache\Repository
 */
class TextToSpeech extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tts';
    }
}
