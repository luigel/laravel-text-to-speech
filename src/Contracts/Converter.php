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

    /**
     * Set where to store the converted file
     *
     * @param string $disk
     * @return $this
     */
    public function toDisk(string $disk = 'storage');

    /**
     * Set path to where to store the converted file
     *
     * @param string $path
     * @return $this
     */
    public function path(string $path);
}