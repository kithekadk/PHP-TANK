<?php
    class Person{
        //properties
        protected $firstname = "Daniel";
        protected $lastname = "Kitheka";
        private $age = 55;
    }

    //inheritance
    class Man extends Person{
        private $hasBeards;

        public function getManDetails(){
            return $this->firstname;
        }
    }

    // class without constructor
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($bTitle, $bAuthor, $bPages){
            $this->title=$bTitle;
            $this->author=$bAuthor;
            $this->pages=$bPages;
        }
        
    }

    //Getters and setters
    class Pet{
        private function owner(){
            $sound = "Hi Boss";
            return $sound;
        }
        public function getOwner(){
            return $this->owner();
        }
    }

?>
