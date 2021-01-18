<?php

	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'welcome', 'admin' => true));
	Router::connect('/feedback', array('controller' => 'feedbacks', 'action' => 'index'));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/contacts', array('controller' => 'pages', 'action' => 'contacts'));
	Router::connect('/registration_page', array('controller' => 'pages', 'action' => 'registration_page'));
	Router::connect('/:language/users/forgetpwd/*', 
		array('controller' => 'users', 'action' => 'forgetpwd'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/users/registration', 
		array('controller' => 'users', 'action' => 'registration'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/users/login', 
		array('controller' => 'users', 'action' => 'login'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/users/cabinet', 
		array('controller' => 'users', 'action' => 'cabinet'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/users/doccabinet', 
		array('controller' => 'users', 'action' => 'doccabinet'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/users/editdoccabinet', 
		array('controller' => 'users', 'action' => 'editdoccabinet'),
		array('language' => '[a-z]{2}')
	);
	
	Router::connect('/:language/news', 
		array('controller' => 'news', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/news/view/*', 
		array('controller' => 'news', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);

	Router::connect('/:language/page/*', 
		array('controller' => 'pages', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language', 
		array('controller' => 'pages', 'action' => 'home'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/registration_page', 
		array('controller' => 'pages', 'action' => 'registration_page'),
		array('language' => '[a-z]{2}')
	);
	
	Router::connect('/:language/search', 
		array('controller' => 'search', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);

/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
