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
     * Set path to where to save the converted file
     *
     * @param string $path
     * @return $this
     */
    public function saveTo(string $path);

    /**
     * Sets the source where the text from
     *
     * @param string $source
     * @return $this
     */
    public function source(string $source = 'text');
}