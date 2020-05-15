<?php

namespace Luigel\TextToSpeech\Contracts;

interface Converter
{
    /**
     * Converts text to speech
     *
     * @param string $text
     * @param array $options
     * @return mixed
     */
    public function convert($text, array $options = null);
}