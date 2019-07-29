<?php
    namespace App\controllers;
    use App\db\entities\Post;
    use Kint;

    class PostController extends Controller{

        public function index(){
            $post = $this->doctrineManager->em->getRepository(Post::class)->findAll();
            \Kint::dump($post);
            $this->viewManager->renderTemplate('postViews.twig.html',['post'=>$post]);
        }
    }