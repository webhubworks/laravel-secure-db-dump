<?php

return [
    /**
     * Specify the database connection to use for the dump.
     * If not set, it will use the default Laravel database connection.
     */
    'db_connection' => env('SECURE_DB_DUMP_DB_CONNECTION'),

    /**
     * Specify the output disk for the database dumps.
     */
    'disk' => env('SECURE_DB_DUMP_DISK'),

    /**
     * Specify whether to dump only the content of the database.
     * If true, it will not include table creation statements in the final dump.
     */
    'only_content' => env('SECURE_DB_DUMP_ONLY_CONTENT', false),

    /**
     * Specify tables of which the content should not be dumped.
     */
    'ignore_tables' => [
        // 'users',
    ],

    /**
     * Specify the faker locale to use for anonymization.
     */
    'faker_locale' => env('SECURE_DB_DUMP_FAKER_LOCALE', 'de_DE'),

    /**
     * Specify which fields should be anonymized.
     * For each table, create an array of fields that should be anonymized.
     *
     * See `https://fakerphp.org/formatters/` which faker methods are available.
     */
    'anonymize_fields' => \Webhub\SecureDbDump\SecureDbDumpRules::class,
];
