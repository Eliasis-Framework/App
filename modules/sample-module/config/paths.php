<?php
/**
 * Eliasis PHP Framework application.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/app
 * @since     1.0.5
 */
use Eliasis\Framework\App;

$rootPath = App::MODULES() . 'sample-module/';

return [
    'path' => [
        'layout' => $rootPath . 'src/template/layout/',
        'page' => $rootPath . 'src/template/page/',
    ],
];
