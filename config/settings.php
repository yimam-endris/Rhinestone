<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application logo | Application
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with an organization
    |
    */
    'logo_path' => 'img/logos/default_2.png',

    /*
    |--------------------------------------------------------------------------
    | Application Aliases
    |--------------------------------------------------------------------------
    |
    | This option controls the aliasing of trainee and trainer titles
    |
    */
    'aliases' => [
        'trainee' => 'school',
        'trainer' => 'Paralegals'
    ],

    /*
    |--------------------------------------------------------------------------
    | Organization Values
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with an organization
    |
    */
    'organization' => [
        'status' => [
            'ACTIVE', 'DEACTIVATED'
        ],

        'types' => [
            'trainer', 'trainee'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | User Values
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with a user
    |
    */
    'user' => [
        'status' => [
            'ACTIVE', 'DEACTIVATED'
        ],

        'genders' => [
            'male', 'female'
        ]
    ],

    'invention_status' => [
        'OPENED', 'PENDING', 'UNDER REVIEW', 'PROCESSED', 'NOT PROCESSED', 'ABANDONED', 'SOLD'
    ],

    /*
    |--------------------------------------------------------------------------
    | Trainer Values
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with an workplan
    |
    */
    'trainer' => [
        'status' => [
            'AWAITING_PREQUALIFICATION',
            'PREQUALIFIED',
            'FAILED_PREQUALIFICATION',
            'UNAVAILABLE',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Trainer Values
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with an workplan
    |
    */
    'trainee' => [
        'status' => [
            'AVAILABLE',
            'UNAVAILABLE'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | WorkPlan Values
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with an workplan
    |
    */
    'workplan' => [
        'status' => [
            'DRAFT', 'SUBMITTED',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Upload Values
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with an upload
    |
    */
    'upload' => [
        'types' => [
            'avatar', 'resume', 'profile', 'training-material'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Language Values | Application
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with a languages
    |
    */
    'languages' => [
        'English',
        'Kiswahili',
        'French',
        'Arabic',
        'Chinese',
        'German',
        'Spanish'
    ],

    /*
    |--------------------------------------------------------------------------
    | Sow Effort levels | Application
    |--------------------------------------------------------------------------
    |
    | This option controls the values associated with sow effor levels
    |
    */
    'effort_level_units' => [
        'hours',
        'days',
        'weeks',
        'months',
        'years'
    ],

    /*
    |--------------------------------------------------------------------------
    |  System currency | Application
    |--------------------------------------------------------------------------
    |
    | This option controls the currency
    |
    */
    'currency' => 'KES',

    /*
    |--------------------------------------------------------------------------
    | Evaluation Options
    |--------------------------------------------------------------------------
    |
    | This option controls the evaluation types
    |
    */
    'evaluations' => [
        'types' => [
            'PRE', 'POST'
        ],

        'post' => [
            'rating_options' => [
                'STRONGLY_AGREE', 'AGREE', 'NEUTRAL', 'DISAGREE', 'STRONGLY_DISAGREE'
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | rating_parameters Options
    |--------------------------------------------------------------------------
    |
    | This option controls the rating options types
    |
    */
    'rating_parameters' => [
        'types' => [
            'pre-qualification',
            'rating',
            'post-evaluation'
        ],
        'entities' => [
            'trainer',
            'trainee',
            'workplan'
        ],
        'raters' => [
            'trainer',
            'trainee',
            'manager'
        ],
        'question_types' => [
            'likert-scale',
            'multiple-choice'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Rating types
    |--------------------------------------------------------------------------
    |
    | This is the maximum rating that will be displayed to users
    |
    */
    'rating_types' => [
        'training-request',
        'pre-evaluation',
        'post-evaluation',
        'pre-qualification'
    ],

    /*
    |--------------------------------------------------------------------------
    | Maximum rating value | Application
    |--------------------------------------------------------------------------
    |
    | This is the maximum rating that will be displayed to users
    |
    */
    'maximum_rating_value' => 5,

    /*
    |--------------------------------------------------------------------------
    | Prequalification threshold value | Application
    in percentage
    |--------------------------------------------------------------------------
    |
    | This is the maximum rating that will be displayed to users
    |
    */
    'prequalification_threshold' => 50.0,

    /*
    |--------------------------------------------------------------------------
    | Required number of pre-qualification raters | Application
    |--------------------------------------------------------------------------
    |
    | This is the maximum rating that will be displayed to users
    |
    */
    'required_number_of_prequalification_raters' => 2,

    /*
    |--------------------------------------------------------------------------
    | The types of settings supported | Systen
    |--------------------------------------------------------------------------
    |
    */
    'setting_types' => [
        'single', 'multiple'
    ]
];
