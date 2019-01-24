<?php
/**
 * Copyright (c) 2017 - present
 * LaravelGoogleRecaptcha - recaptcha.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 12/9/2018
 * MIT license: https://github.com/biscolab/laravel-recaptcha/blob/master/LICENSE
 */

/**
 * To configure correctly please visit https://developers.google.com/recaptcha/docs/start
 */
return [

    /**
     *
     * The site key
     * get site key @ www.google.com/recaptcha/admin
     *
     */
    'api_site_key'   => '6LekfYoUAAAAAKsApsIP1j9PD3eCjCVLHi3yW5gZ',

    /**
     *
     * The secret key
     * get secret key @ www.google.com/recaptcha/admin
     *
     */
    'api_secret_key' => '6LekfYoUAAAAAHrMcFq5SskjRVdU-qyWgr862pB-',

    /**
     *
     * ReCATCHA version
     * Supported: "v2", "invisible",
     *
     * get more info @ https://developers.google.com/recaptcha/docs/versions
     *
     */
    'version'        => 'v3',

    /**
     *
     * IP addresses for which validation will be skipped
     *
     */
    'skip_ip'        => []
];