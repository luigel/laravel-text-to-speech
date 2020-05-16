<?php

namespace Luigel\TextToSpeech\Providers;

use Illuminate\Support\ServiceProvider;
use Luigel\TextToSpeech\TextToSpeechManager;

class TextToSpeechServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('tts.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'tts');

        $this->registerTextToSpeechManager();

        $this->registerAliases();
    }

    /**
     * Registers the Text to speech manager.
     *
     * @return void
     */
    protected function registerTextToSpeechManager()
    {
        $this->app->singleton('tts', function ($app) {
            return new TextToSpeechManager($app);
        });
    }

    protected function registerAliases()
    {
        $this->app->alias(
            \Luigel\TextToSpeech\Facades\TextToSpeech::class,
            'TTS'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'tts',
        ];
    }
}
