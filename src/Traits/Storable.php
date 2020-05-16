<?php 

namespace Luigel\TextToSpeech\Traits;

use Illuminate\Support\Facades\Storage;

trait Storable
{
    protected $disk = 'storage';

    protected $path = null;

    /**
     * Set where to store the converted file
     *
     * @param string $disk
     * @return $this
     */
    public function toDisk(string $disk = 'storage')
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
    public function path(string $path)
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

        switch ($this->disk)
        {
            case 'storage': 
                $this->storeToStorage($resultContent);
                break;
            default: 
                break;
        }
    }

    /**
     * Stores the result file to storage
     *
     * @param mixed $convertedData
     * @return void
     */
    protected function storeToStorage($convertedData)
    {
        Storage::put($this->path, $convertedData);
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