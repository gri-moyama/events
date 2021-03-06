<?php

return [
    'producers' => [
        //        \OneFit\Base\Models\CheckIn::class => [
        //            \OneFit\Events\Models\Type::CHECK_IN => \OneFit\Events\Models\Topic::MEMBER_DOMAIN,
        //        ],
        //        \OneFit\Base\Models\FriendConnection::class => [
        //            \OneFit\Events\Models\Type::FRIEND_CONNECTION => \OneFit\Events\Models\Topic::MEMBER_DOMAIN,
        //        ],
        //        \OneFit\Base\Models\WorkoutInvitation::class => [
        //            \OneFit\Events\Models\Type::WORKOUT_INVITATION => \OneFit\Events\Models\Topic::MEMBER_DOMAIN,
        //        ],
    ],
    'listeners' => [
        //        \OneFit\Events\Models\Type::NOTIFICATION => \OneFit\Events\Models\Topic::NOTIFICATION_STREAM,
    ],
    'source' => \OneFit\Events\Models\Source::UNDEFINED,
    'metadata' => [
        'broker' => [
            'list' => env('METADATA_BROKER_LIST', 'localhost:9092'),
        ],
    ],
    'socket' => [
        'timeout' => [
            'ms' => env('SOCKET_TIMEOUT_MS', 3000),
        ],
        'blocking' => [
            'max' => [
                'ms' => env('SOCKET_BLOCKING_MAX_MS', 50),
            ],
        ],
    ],
    'topic' => [
        'metadata' => [
            'refresh' => [
                'sparse' => env('TOPIC_METADATA_REFRESH_SPARSE', 'true'),
                'interval' => [
                    'ms' => env('TOPIC_METADATA_REFRESH_INTERVAL_MS', 300000),
                ],
            ],
        ],
    ],
    'internal' => [
        'termination' => [
            'signal' => env('INTERNAL_TERMINATION_SIGNAL', 29),
        ],
    ],
    'auto' => [
        'offset' => [
            'reset' => env('AUTO_OFFSET_RESET', 'smallest'),
        ],
    ],
    'enable' => [
        'auto' => [
            'commit' => env('ENABLE_AUTO_COMMIT', 'true'),
            'offset' => [
                'store' => env('ENABLE_AUTO_OFFSET_STORE', 'true'),
            ],
        ],
    ],
    'message' => [
        'signature' => [
            'salt' => env('MESSAGE_SIGNATURE_SALT', ''),
        ],
        'timeout' => [
            'ms' => env('MESSAGE_TIMEOUT_MS', 3000),
        ],
    ],
    'flush' => [
        'retries' => env('FLUSH_RETRIES', 3),
        'timeout' => [
            'ms' => env('FLUSH_TIMEOUT_MS', 3000),
        ],
    ],
    'queue' => [
        'buffering' => [
            'max' => [
                'ms' => env('QUEUE_BUFFERING_MAX_MS', 50),
            ],
        ],
    ],
    'request' => [
        'required' => [
            'acks' => env('REQUEST_REQUIRED_ACKS', -1),
        ],
    ],
    'api' => [
        'version' => [
            'request' => [
                'timeout' => [
                    'ms' => env('EVENTS_API_VERSION_REQUEST_TIMEOUT_MS', 10000),
                ],
            ],
        ],
    ],
];
