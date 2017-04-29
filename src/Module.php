<?php

namespace Flexo\Module\Example;

class Module extends \Flexo\Core\Module
{
    public function getRootPath()
    {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . '..';
    }

    public function onRegister()
    {
        $this->app->get('/example', function($request, $response)
        {
            return $this->view->render($response, 'example/home.twig');
        })->setName('example-home');
        $this->container->nav->addItem('Example', 'example-home');
    }
}
