<?php
    namespace App\controllers;
    use App\ViewManager;
    use App\DoctrineManager;
    use App\LogManager;
    use App\SessionManager;

    abstract class Controller{

        protected $viewManager;
        protected $doctrineManager;
        protected $logManager;
        protected $sessionManager;


        public function __construct(ViewManager $viewManager, DoctrineManager $doctrineManager, LogManager $logManager, SessionManager $sessionManager){
            $this->viewManager = $viewManager;
            $this->doctrineManager = $doctrineManager;
            $this->logManager = $logManager;
            $this->logManager->info("Controlador ->".get_class($this)." cargado");
            $this->sessionManager = $sessionManager;


        }

        public abstract function index();

        public function redirectTo(string $page){

            $host = $_SERVER['HTTP_HOST'];
            //$uri = rtrim(dirname($_SERVER['PHP_SELF'],'/\\'));
            header("Location: http://$host/$page");
        }
    }