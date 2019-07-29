<?php
    namespace App\controllers;
    use App\ViewManager;
    use App\DoctrineManager;

    abstract class Controller{

        protected $viewManager;
        protected $doctrineManager;
        public function __construct(ViewManager $viewManager, DoctrineManager $doctrine){
            $this->viewManager = $viewManager;
            $this->doctrineManager = $doctrine;

        }

        public abstract function index();
    }