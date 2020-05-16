<?php

return [

    /*
     * The disk on which to store converted mp3 files by default. Choose
     * one of the disks you've configured in config/filesystems.php.
     */
    'disk' => env('TTS_DISK', 'local'),

    /**
     * The default audio format from the converted text to speech
     * You can choose mp3 as of the moment.
     */
    'output_format' => env('TTS_OUTPUT_FORMAT', 'mp3'),

    /**
     * The driver to be used for converting Text to Speech
     * You can choose polly, or null as of the moment.
     */
    'driver' => env('TTS_DRIVER', 'null'),

    'services' => [
        'polly' => [
            /**
             * IAM Credentials from AWS.
             */
            'credentials' => [
                'key'    => env('TTS_AWS_ACCESS_KEY_ID', ''),
                'secret' => env('TTS_AWS_SECRET_ACCESS_KEY', ''),
            ],
            'region' => env('TTS_AWS_REGION', 'us-east-1'),
            'version' => 'latest',
            /**
             * Voice ID to use for the synthesis.
             * You can use either of these
             * Aditi|Amy|Astrid|Bianca|Brian|Camila|Carla|Carmen|Celine|
             * Chantal|Conchita|Cristiano|Dora|Emma|Enrique|Ewa|Filiz|Geraint|
             * Giorgio|Gwyneth|Hans|Ines|Ivy|Jacek|Jan|Joanna|Joey|Justin|Karl|
             * Kendra|Kimberly|Lea|Liv|Lotte|Lucia|Lupe|Mads|Maja|Marlene|Mathieu|
             * Matthew|Maxim|Mia|Miguel|Mizuki|Naja|Nicole|Penelope|Raveena|Ricardo|
             * Ruben|Russell|Salli|Seoyeon|Takumi|Tatyana|Vicki|Vitoria|Zeina|Zhiyu.
             */
            'default_voice_id' => 'Amy',
        ],
    ],

];
