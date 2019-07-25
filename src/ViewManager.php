<?php
    namespace App;
    use Twig;

    class ViewManager{
        private $twig;
        public function __construct()
        {
            $loader= new \Twig\Loader\FilesystemLoader(dirname(__DIR__).'/templates');//twig carga todas las vistas en templates
            $this->twig = new \Twig\Environment($loader, [//guarda en cache cada vista, para agilizar el proceso
                'cache'=>dirname(__DIR__).'/cache/views'
            ]);
        }

        public function render ($view, $args=[])
        {
            if($args != null){
                extract ($args, EXTR_SKIP);
            }

            $file= dirname(__DIR__).'/templates'.$view;//comprueba que el archivo exista
            if(is_readable($file)){
                require $file;
            }
        }
        public function renderTemplate($template, $args=[]){
            echo $this->twig->render($template, $args);
        }
    }