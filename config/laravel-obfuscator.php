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
        'license_key' => env('HONEYCRISP_OBFUSCATOR_LICENSE_KEY', ''),
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
        'enabled' => env('HONEYCRISP_OBFUSCATOR_BACKUP_ENABLED', true),
        'directory' => env('HONEYCRISP_OBFUSCATOR_BACKUP_DIR', storage_path('app/honeycrisp_backups')),
        'keep_backups' => env('HONEYCRISP_OBFUSCATOR_KEEP_BACKUPS', 10), // Number of backups to keep
        'auto_cleanup' => env('HONEYCRISP_OBFUSCATOR_AUTO_CLEANUP', true),
        'compression' => env('HONEYCRISP_OBFUSCATOR_BACKUP_COMPRESSION', false),
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
        'method' => env('HONEYCRISP_OBFUSCATOR_METHOD', 'base64_reverse'), // base64_reverse, advanced, enterprise
        'level' => env('HONEYCRISP_OBFUSCATOR_LEVEL', 'basic'), // basic, advanced, enterprise
        'remove_comments' => env('HONEYCRISP_OBFUSCATOR_REMOVE_COMMENTS', true),
        'remove_whitespace' => env('HONEYCRISP_OBFUSCATOR_REMOVE_WHITESPACE', true),
        'preserve_php_tags' => env('HONEYCRISP_OBFUSCATOR_PRESERVE_PHP_TAGS', true),
        'preserve_line_numbers' => env('HONEYCRISP_OBFUSCATOR_PRESERVE_LINE_NUMBERS', false),
        'add_header_comment' => env('HONEYCRISP_OBFUSCATOR_ADD_HEADER', true),
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
        'suffix' => env('HONEYCRISP_OBFUSCATOR_OUTPUT_SUFFIX', '_obfuscated'),
        'directory' => env('HONEYCRISP_OBFUSCATOR_OUTPUT_DIR', storage_path('app/obfuscated')),
        'preserve_structure' => env('HONEYCRISP_OBFUSCATOR_PRESERVE_STRUCTURE', true),
        'overwrite_original' => env('HONEYCRISP_OBFUSCATOR_OVERWRITE_ORIGINAL', false),
        'create_zip' => env('HONEYCRISP_OBFUSCATOR_CREATE_ZIP', false),
        'timestamp_files' => env('HONEYCRISP_OBFUSCATOR_TIMESTAMP_FILES', true),
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
        'enabled' => env('HONEYCRISP_OBFUSCATOR_LOGGING_ENABLED', true),
        'level' => env('HONEYCRISP_OBFUSCATOR_LOG_LEVEL', 'info'),
        'channel' => env('HONEYCRISP_OBFUSCATOR_LOG_CHANNEL', 'daily'),
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
        'randomize_variables' => env('HONEYCRISP_OBFUSCATOR_RANDOMIZE_VARS', true),
        'encrypt_strings' => env('HONEYCRISP_OBFUSCATOR_ENCRYPT_STRINGS', true),
        'control_flow_obfuscation' => env('HONEYCRISP_OBFUSCATOR_CONTROL_FLOW', false),
        'dead_code_injection' => env('HONEYCRISP_OBFUSCATOR_DEAD_CODE', false),
        'anti_debugging' => env('HONEYCRISP_OBFUSCATOR_ANTI_DEBUG', true),
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
        'max_file_size' => env('HONEYCRISP_OBFUSCATOR_MAX_FILE_SIZE', 10485760), // 10MB
        'max_batch_files' => env('HONEYCRISP_OBFUSCATOR_MAX_BATCH_FILES', 10),
        'allowed_file_types' => ['php'],
        'session_timeout' => env('HONEYCRISP_OBFUSCATOR_SESSION_TIMEOUT', 3600), // 1 hour
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
            'single_file' => env('HONEYCRISP_OBFUSCATOR_API_RATE_LIMIT', 60), // requests per minute
            'batch_processing' => env('HONEYCRISP_OBFUSCATOR_API_BATCH_LIMIT', 5), // batches per minute
        ],
        'max_file_size' => env('HONEYCRISP_OBFUSCATOR_API_MAX_FILE_SIZE', 10485760), // 10MB
        'max_batch_size' => env('HONEYCRISP_OBFUSCATOR_API_MAX_BATCH_SIZE', 10),
        'require_authentication' => env('HONEYCRISP_OBFUSCATOR_API_AUTH', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Security Settings
    |--------------------------------------------------------------------------
    |
    | Configure security and protection settings.
    |
    */
    'security' => [
        'enable_license_check' => env('HONEYCRISP_OBFUSCATOR_ENABLE_LICENSE_CHECK', true),
        'allow_deobfuscation' => env('HONEYCRISP_OBFUSCATOR_ALLOW_DEOBFUSCATION', true),
        'secure_mode' => env('HONEYCRISP_OBFUSCATOR_SECURE_MODE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Performance Settings
    |--------------------------------------------------------------------------
    |
    | Configure performance and optimization settings.
    |
    */
    'performance' => [
        'memory_limit' => env('HONEYCRISP_OBFUSCATOR_MEMORY_LIMIT', '512M'),
        'timeout' => env('HONEYCRISP_OBFUSCATOR_TIMEOUT', 300), // 5 minutes
        'chunk_size' => env('HONEYCRISP_OBFUSCATOR_CHUNK_SIZE', 1000), // files per batch
    ],
];
