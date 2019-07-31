<?php
    namespace App\controllers;
    use App\db\entities\User;

    class UsersController extends Controller
    {
        public function index(){
            $users = $this->doctrineManager->em->getRepository(User::class)->findAll();
            $this->viewManager->renderTemplate('usersViews.twig.html',['users'=>$users]);
            \Kint::dump($users);
        }
    }