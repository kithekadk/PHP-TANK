<?php
    class Person{
        private $firstname = "Daniel";
        private $lastname = "Kitheka";
        private $age = 55;
    }

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
