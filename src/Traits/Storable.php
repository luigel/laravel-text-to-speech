<?php 

namespace Luigel\TextToSpeech\Traits;

use Illuminate\Support\Facades\Storage;

trait Storable
{
    /**
     * Determines where to save the converted file
     *
     * @var string
     */
    protected $disk = 'local';

    /**
     * Determines the path where to save the converted file
     *
     * @var string
     */
    protected $path;

    /**
     * Set where to store the converted file
     *
     * @param string $disk
     * @return $this
     */
    public function disk(string $disk)
    {
        $this->disk = $disk;

        return $this;
    }

    /**
     * Set path to where to store the converted file
     *
     * @param string $path
     * @return $this
     */
    public function saveTo(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Execute the store
     * @param mixed $resultContent
     * @return void
     */
    protected function store($resultContent)
    {
        $this->ensurePathIsNotNull();

        $storage = Storage::disk($this->disk);
        
        $storage->put($this->path, $resultContent);
    }

    /**
     * Ensures the path not to be null if it is null it will set a default path
     *
     * @return void
     */
    protected function ensurePathIsNotNull()
    {
        $this->path = $this->path ?: '/TTS/' . now()->timestamp . '.mp3';
    }
}