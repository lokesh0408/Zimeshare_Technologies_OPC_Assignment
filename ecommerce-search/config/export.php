<?php

return [

    /*
     * If true, the exporter will crawl through your site's pages to determine
     * the paths that need to be exported.
     */
    'crawl' => true,

    /*
     * Add additional paths to be added to the export here. If you're using the
     * `crawl` option, you probably don't need to add anything here.
     *
     * For example: "about", "posts/featured"
     */
    'paths' => [],

    /*
     * Files and folders that should be included in the build. Expects
     * key/value pairs with current paths as keys, and destination paths
     * as values.
     *
     * By default your `public` folder's contents will be added to the export.
     */
    'include_files' => [
        'public' => '',
    ],

    /*
     * File patterns that should be excluded from the included files.
     */
    'exclude_file_patterns' => [
        '/\.php$/',
        '/mix-manifest\.json$/',
    ],

    /*
     * Whether or not the destination folder should be emptied before starting
     * the export.
     */
    'clean_before_export' => true,

    /*
     * If set, the site will be exported to this disk. Disks can be configured
     * in `config/filesystems.php`.
     *
     * If empty, your site will be exported to a `dist` folder.
     */
    'disk' => null,

    /*
     * Shell commands that should be run before the export starts when running
     * `php artisan export`.
     *
     * You can skip these by adding a `--skip-{name}` flag to the command.
     */
    'before' => [
        // 'assets' => '/usr/local/bin/yarn production',
    ],

    /*
     * Shell commands that should be run after the export has finished when
     * running `php artisan export`.
     *
     * You can skip these by adding a `--skip-{name}` flag to the command.
     */
    'after' => [
        // 'deploy' => '/usr/local/bin/netlify deploy --prod',
    ],

    /*
    |--------------------------------------------------------------------------
    | Source Directory
    |--------------------------------------------------------------------------
    |
    | This value defines the source directory containing the Laravel views.
    | After exporting, the HTML files will be saved in the destination directory.
    |
    */

    'source' => base_path('resources/views'),

    /*
    |--------------------------------------------------------------------------
    | Destination Directory
    |--------------------------------------------------------------------------
    |
    | This value defines the destination directory where the exported HTML files
    | will be saved. It should be relative to the project's public directory.
    |
    */

    'destination' => public_path('exported'),

    /*
    |--------------------------------------------------------------------------
    | Remove Original Files
    |--------------------------------------------------------------------------
    |
    | If set to true, the original PHP files in the source directory will be
    | removed after exporting. This helps keep your project clean.
    |
    */

    'remove_original_files' => false,

    /*
    |--------------------------------------------------------------------------
    | Overwrite Existing Files
    |--------------------------------------------------------------------------
    |
    | If set to true, existing HTML files in the destination directory will be
    | overwritten during export. Otherwise, they will be left untouched.
    |
    */

    'overwrite_existing_files' => false,

];
