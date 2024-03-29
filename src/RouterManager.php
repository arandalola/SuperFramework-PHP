<?php
    namespace App;
    use \DI\Container;

    class RouterManager{

        private $container;
        public function __construct(Container $container){
            $this->container = $container;
        }

        public function dispatch(string $requestMethod, string $requestUri, \FastRoute\Dispatcher $dispatcher){

            $route=$dispatcher->dispatch($requestMethod, $requestUri);
            switch($route[0]){
                case \FastRoute\Dispatcher::NOT_FOUND:
                    header("HTTP/1.1 404 Not Found");
                    $this->container->call(["App\controllers\NotFoundController", "index"],[0]);
                    break;

                case \FastRoute\Dispatcher::FOUND:
                    $controller = $route[1];
                    $method = $route[2];
                    $this->container->call($controller, $method);
                    break;
                case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED;
                    header("HTTP/1.0 405 Method not Allowed");
                    echo"<h1>Method not Allowed</h1>";
                    break;
            }
        }
    }