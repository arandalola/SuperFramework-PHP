<?php
    namespace App\db\entities;
    use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="post")*/ 

    class Post extends Entity{

        /** 
        * @ORM\ID
        * @ORM\Column(type="integer")
        * @ORM\GeneratedValue(strategy="IDENTITY")*/ 

        public $id;

        /** 
         * @ORM\Column(type="string")*/ 

        public $title;

        /**
        * @ORM\Column(type="string") */

        public $description;

        /** 
         * @ORM\Column(type="string")*/

        public $author;

         /**
          * @ORM\Column(type="datetime")*/ 

        public $created_at;

        /** 
         * @ORM\Column(type="datetime")*/ 

        public $update_at;

        public function __construct(){
            $this->created_at =new \Datatime('now');
        }
    }