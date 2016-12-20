<?php

require 'vendor/autoload.php';

use Aws\Rekognition\RekognitionClient;

$client = new RekognitionClient([
    'version'     => 'latest',
    'region'      => 'us-west-2',
    'credentials' => [
        'key'    => 'YOUR_ACCESS_KEY',
        'secret' => 'YOUR_SECRET_KEY',
    ]
]);
$result = $client->compareFaces([
    'SourceImage' => [
        'S3Object' => [
            'Bucket' => 'YOUR_BUCKET_NAME',
            'Name' => 'YOUR_SOURCE_IMAGE.jpg',
            'Version' => 'latest',
        ],
    ],
    'TargetImage' => [
        'S3Object' => [
            'Bucket' => 'YOUR_BUCKET_NAME',
            'Name' => 'YOUR_TARGET_IMAGE.jpg',
            'Version' => 'latest',
        ],
    ],
    'SimilarityThreshold' => 0.1 // Output similarity threshold.
]);


var_dump($result);