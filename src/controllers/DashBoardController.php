<?php
    namespace App\controllers;
    use App\controllers\ControllerAuth;

    class DashBoardController extends ControllerAuth{

        public function index(){

            $this->viewManager->renderTemplate('dashboard.twig.html', ['user'=>$this->user->email]);
        }
    }