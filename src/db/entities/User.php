<?php
    namespace App\db\entities;
    use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="users")*/ 

    class User extends Entity{

        /** 
        * @ORM\ID
        * @ORM\Column(type="integer")
        * @ORM\GeneratedValue(strategy="IDENTITY")*/ 

        protected $id;

        /** 
         * @ORM\Column(type="string")*/ 

        protected $name;

        /**
        * @ORM\Column(type="string") */

        protected $email;

        /** 
         * @ORM\Column(type="string")*/

        protected $password;

         /**
          * @ORM\Column(type="datetime")*/ 

         protected $created_at;

        /** 
         * @ORM\Column(type="datetime")*/ 

          protected $update_at;

          public function __construct(){
              $this->created_at =new \Datatime('now');
          }
    }