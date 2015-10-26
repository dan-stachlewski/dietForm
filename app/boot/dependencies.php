<?php

$container = $app->getContainer();

//set up twig view
$container['view'] = function ($c) use($conf){
    $twig = $conf->get('view.twig');
    $template_path = $conf->get('view.template_path');

    $view = new \Slim\Views\Twig( $template_path,  $twig);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

//set up CSRF
$container['csrf'] = function ($c) {
    $guard = new \Slim\Csrf\Guard();
    //called in case of failure
    $guard->setFailureCallable(function ($request, $response, $next) {
        $request = $request->withAttribute("csrf_status", false);
        return $next($request, $response);
    });
    return $guard;
};

// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages();
};

//anything application specific can be preserved
$container['application'] = function ($c) use($conf){
   return  $conf->get('application');
};
//set up markdown processor
$container['md_parser'] = function ($c) {
    $parser = new Parsedown();
    return $parser;
};
//toc - all documents and slugs
use Noodlehaus\Config;
$container['toc'] = function($c){
    $dir_name = $c['application']['docs_path'];
    $index_file_name = $c['application']['docs_index_file'];
    $indexFile = "{$dir_name}/{$index_file_name}";
    $toc = Config::load($indexFile)->get('toc');
    return $toc;
};

