<?php
define("PHP_ROOT", $_SERVER['DOCUMENT_ROOT'] . '/../php');
require PHP_ROOT . '/me/fru1t/common/language/Autoload.php';
use me\fru1t\common\language\Autoload;
use me\fru1t\common\language\Http;
use me\fru1t\common\router\route\FileRoute;
use me\fru1t\common\router\Router;
use me\fru1t\common\template\Templates;

// Set up autoloader
Autoload::setup(PHP_ROOT);

// Set up routing
Router::setup()
		->setContentDirectory('../php/me/fru1t/core/content')
		->setDefaultContentPagePath('home.php')
		->setErrorPagePath('home.php')
		->setPageParameterName(Router::DEFAULT_PAGE_PARAMETER_NAME)
		->map(new FileRoute('styles.css', '../styles/bin/root.css',
				true, [ Http::HEADER_CONTENT_TYPE_CSS ]))
		->map(new FileRoute('root.css.map', '../styles/bin/root.css.map'))
		->complete();

// Set up templater
Templates::setup()->complete();

// Init
Router::route();
