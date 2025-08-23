<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Honeycrisp Laravel Obfuscator Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains configuration options for the Honeycrisp Laravel Obfuscator package.
    | You can customize these settings based on your needs.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | License Settings
    |--------------------------------------------------------------------------
    |
    | Configure license key and validation settings
    |
    */
    'license' => [
        'license_key' => env('HONEYCRISP_LICENSE_KEY', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | Backup Settings
    |--------------------------------------------------------------------------
    |
    | Configure backup behavior for obfuscated files.
    |
    */
    'backup' => [
        'enabled' => env('HONEYCRISP_BACKUP_ENABLED', true),
        'directory' => env('HONEYCRISP_BACKUP_DIR', 'app/honeycrisp_backups'),
        'keep_backups' => env('HONEYCRISP_KEEP_BACKUPS', 10), // Number of backups to keep
    ],

    /*
    |--------------------------------------------------------------------------
    | Obfuscation Settings
    |--------------------------------------------------------------------------
    |
    | Configure obfuscation behavior and options.
    |
    */
    'obfuscation' => [
        'method' => env('HONEYCRISP_METHOD', 'base64_reverse'), // base64_reverse, advanced
        'remove_comments' => env('HONEYCRISP_REMOVE_COMMENTS', true),
        'remove_whitespace' => env('HONEYCRISP_REMOVE_WHITESPACE', true),
        'preserve_php_tags' => env('HONEYCRISP_PRESERVE_PHP_TAGS', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | File Patterns
    |--------------------------------------------------------------------------
    |
    | Define which files should be included or excluded from obfuscation.
    |
    */
    'patterns' => [
        'include' => [
            '*.php',
        ],
        'exclude' => [
            'vendor/**/*',
            'node_modules/**/*',
            'storage/**/*',
            'bootstrap/**/*',
            'config/**/*',
            'database/**/*',
            'resources/**/*',
            'routes/**/*',
            'tests/**/*',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Output Settings
    |--------------------------------------------------------------------------
    |
    | Configure output file naming and location.
    |
    */
    'output' => [
        'suffix' => env('HONEYCRISP_OUTPUT_SUFFIX', '_obfuscated'),
        'preserve_structure' => env('HONEYCRISP_PRESERVE_STRUCTURE', true),
        'overwrite_original' => env('HONEYCRISP_OVERWRITE_ORIGINAL', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Logging
    |--------------------------------------------------------------------------
    |
    | Configure logging for obfuscation operations.
    |
    */
    'logging' => [
        'enabled' => env('HONEYCRISP_LOGGING_ENABLED', true),
        'level' => env('HONEYCRISP_LOG_LEVEL', 'info'),
        'channel' => env('HONEYCRISP_LOG_CHANNEL', 'daily'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Advanced Obfuscation Options
    |--------------------------------------------------------------------------
    |
    | Configure advanced obfuscation techniques for different levels.
    |
    */
    'advanced_obfuscation' => [
        'randomize_variables' => env('HONEYCRISP_RANDOMIZE_VARS', true),
        'encrypt_strings' => env('HONEYCRISP_ENCRYPT_STRINGS', true),
        'control_flow_obfuscation' => env('HONEYCRISP_CONTROL_FLOW', false),
        'dead_code_injection' => env('HONEYCRISP_DEAD_CODE', false),
        'anti_debugging' => env('HONEYCRISP_ANTI_DEBUG', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Web Interface Settings
    |--------------------------------------------------------------------------
    |
    | Configure the web interface behavior and limits.
    |
    */
    'web_interface' => [
        'max_file_size' => env('HONEYCRISP_MAX_FILE_SIZE', 10485760), // 10MB
        'max_batch_files' => env('HONEYCRISP_MAX_BATCH_FILES', 10),
        'allowed_file_types' => ['php'],
        'session_timeout' => env('HONEYCRISP_SESSION_TIMEOUT', 3600), // 1 hour
    ],

    /*
    |--------------------------------------------------------------------------
    | API Settings
    |--------------------------------------------------------------------------
    |
    | Configure API behavior and rate limiting.
    |
    */
    'api' => [
        'rate_limit' => [
            'single_file' => env('HONEYCRISP_API_RATE_LIMIT', 60), // requests per minute
            'batch_processing' => env('HONEYCRISP_API_BATCH_LIMIT', 5), // batches per minute
        ],
        'max_file_size' => env('HONEYCRISP_API_MAX_FILE_SIZE', 10485760), // 10MB
        'max_batch_size' => env('HONEYCRISP_API_MAX_BATCH_SIZE', 10),
        'require_authentication' => env('HONEYCRISP_API_AUTH', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Backup Directory
    |--------------------------------------------------------------------------
    |
    | Configure backup directory for obfuscated files.
    |
    */
    'backup_directory' => env('HONEYCRISP_BACKUP_DIR', 'storage/app/honeycrisp_backups'),

    /*
    |--------------------------------------------------------------------------
    | Output Directory
    |--------------------------------------------------------------------------
    |
    | Configure output directory for obfuscated files.
    |
    */
    'output_directory' => env('HONEYCRISP_OUTPUT_DIR', 'storage/app/obfuscated'),
];
