<?php


$app->get('/', function ($request, $response, $args) {
    ddd($this->toc);
    return $response->write("Hello from Getting slim with Slim");

});


$app->get('/docs', function ($request, $response, $args) {

    $this->view->render($response, 'md_document.twig', [
        'docs' => $this->toc,
        'page_content' => "<h1>Get slim with Slim</h1>",
    ]);
})->setName('docs-home');
// this id's the route
// using reg exp to validate,
// w a html extension
$app->get('/docs/{fname:[^\s]+.html}', function ($request, $response, $args) {

    //see whats in a response and request
    d($request); 
    ddd($response);
    
    $dir = $this->application['docs_path'];
    $docs = $this->toc; //take array
    ddd($docs);
    $idx = array_search($args['fname'], array_column($docs, 'slug')); //search array from index
    $filename = $docs[$idx]['fname']; //work out filename

    $full_filename = "{$dir}/{$filename}"; //take full filename
    $parser = $this->md_parser; //taking out md_parser from container

    $content = $parser->text(file_get_contents($full_filename)); //converting file full_content to html
    $this->view->render($response, 'md_document.twig', [ 
        'docs' => $docs,
        'page_content' => $content,
        'current_file' => $filename,
    ]); //display file view render response, template response


})->setName('docs');

$app->get('/bmi', function ($request, $response, $args) {
    return $this->view->render($response, 'forms/bmi.twig',
    [
        'docs' => $this->toc,
        'bmi' => [],
        'errors' => [],
    ]);
})->setName('bmi');
