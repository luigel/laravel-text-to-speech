<?php

namespace Luigel\TextToSpeech\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void convert($data, array $options)
 * @method static \Luigel\TextToSpeech\Contracts\Converter saveTo(string $path)
 * @method static \Luigel\TextToSpeech\Contracts\Converter disk(string $disk)
 * @method static \Luigel\TextToSpeech\Contracts\Converter source(string $source)
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
