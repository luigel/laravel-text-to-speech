<?php

namespace Luigel\TextToSpeech\Contracts;

interface Factory
{
    /**
     * Get a tts services instance by name.
     *
     * @param  string|null  $name
     * @return \Luigel\TextToSpeech\Contracts\Repository
     */
    public function services($name = null);
}