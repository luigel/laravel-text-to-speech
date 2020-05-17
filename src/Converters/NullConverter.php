<?php

namespace Luigel\TextToSpeech\Converters;

use Luigel\TextToSpeech\Contracts\Converter;
use Luigel\TextToSpeech\Traits\Sourceable;
use Luigel\TextToSpeech\Traits\Storable;

class NullConverter implements Converter
{
    use Storable, Sourceable;

    /**
     * Converts the text to speech.
     *
     * @param mixed $data
     * @param array $options
     * @return void
     */
    public function convert($data, array $options = null)
    {
        return $this->store($data);
    }
}
