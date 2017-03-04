<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/Eliasis
 * @since      1.0.0
 */

namespace App\Controller;

use Eliasis\App\App,
	Eliasis\Hook\Hook,
	Eliasis\Controller\Controller,
    Josantonius\Asset\Asset;

/**
 * Home controller.
 *
 * @since 1.0.0
 */
class Home extends Controller {

    /**
     * Construct.
     *
     * @since 1.0.0
     */
	function __construct() {

        $this->setHooks();
	}

    /**
     * Add hooks.
     *
     * @since 1.0.0
     */
	public function setHooks() {

		Hook::addHook([
			'css'       => App::namespace('controller') . 'Home@css',
			'js'        => App::namespace('controller') . 'Home@js',
		   #'afterBody' => App::namespace('controller') . 'Home@afterBody'),
		   #'footer'    => App::namespace('controllers) . 'Home@after'),
		]);
	}

    /**
     * Actions for css hook.
     *
     * @since 1.0.0
     */
	public function css() {

        Asset::css(PUBLIC_URL . 'css' . DS . 'style.css');
	}
	
    /**
     * Actions for js hook.
     *
     * @since 1.0.0
     */
	public function js() { }
	
    /**
     * Actions for afterbody hook.
     *
     * @since 1.0.0
     */
	public function afterBody() { }
	
    /**
     * Actions for footer hook.
     *
     * @since 1.0.0
     */
	public function footer() { }
	
    /**
     * Render view.
     *
     * @since 1.0.0
     */
	public function render() {

        self::$view->renderizate(App::path('layout') . 'default');
	}
}