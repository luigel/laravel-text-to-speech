<?php

return [
    
    'driver' => env('TTS_DRIVER', 'polly'),
    'services' => [
        'polly' => [
            /**
             * IAM Credentials from AWS 
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
             * Ruben|Russell|Salli|Seoyeon|Takumi|Tatyana|Vicki|Vitoria|Zeina|Zhiyu
             */
            'default_voice_id' => 'Amy',
        ]
    ]

];
