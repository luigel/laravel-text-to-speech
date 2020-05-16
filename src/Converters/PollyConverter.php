<?php

namespace Luigel\TextToSpeech\Converters;

use Luigel\TextToSpeech\Contracts\Converter;
use Luigel\TextToSpeech\Traits\Sourceable;
use Luigel\TextToSpeech\Traits\Storable;

class PollyConverter implements Converter
{
    use Storable, Sourceable;

    /**
     * Client instance of Polly.
     *
     * @var \Aws\Polly\PollyClient
     */
    protected $client;

    public function __construct($config)
    {
        $credentials = $this->getCredentials($config['credentials']);

        $this->client = new \Aws\Polly\PollyClient(['version' => $config['version'], 'credentials' => $credentials, 'region' => $config['region']]);
    }

    /**
     * Get credentials of AWS.
     *
     * @param array $credentials
     * @return \Aws\Credentials\Credentials
     */
    protected function getCredentials(array $credentials)
    {
        return new \Aws\Credentials\Credentials($credentials['key'], $credentials['secret']);
    }

    /**
     * Get the Polly Client.
     *
     * @return \Aws\Polly\PollyClient
     */
    public function getClient(): \Aws\Polly\PollyClient
    {
        return $this->client;
    }

    /**
     * Converts the text to speech.
     *
     * @param mixed $data
     * @param array $options
     * @return void
     */
    public function convert($data, array $options = null)
    {
        if (! isset($options['VoiceId'])) {
            $options['VoiceId'] = config('tts.services.polly.voice_id', 'Amy');
        }

        if (! isset($options['OutputFormat'])) {
            $options['OutputFormat'] = config('tts.output_format');
        }

        $parameters = array_merge($options, ['Text' => $this->getTextFromSource($data)]);
        $result = $this->client->synthesizeSpeech($parameters);

        $this->store($this->getResultContent($result));
    }

    /**
     * Get the content of the result from AWS Polly.
     *
     * @param mixed $result
     * @return mixed
     */
    protected function getResultContent($result)
    {
        return $result->get('AudioStream')->getContents();
    }
}
