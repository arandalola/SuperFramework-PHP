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

        public $id;

        /** 
         * @ORM\Column(type="string")*/ 

        public $name;

        /**
        * @ORM\Column(type="string") */

        public $email;

        /** 
         * @ORM\Column(type="string")*/

        public $password;

         /**
          * @ORM\Column(type="datetime")*/ 

        public $created_at;

        /** 
         * @ORM\Column(type="datetime")*/ 

        public $update_at;

        public function __construct(){
            $this->created_at = new \Datetime('now');
        }
    }