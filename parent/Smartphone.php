<?php
    class Smartphone{
        public function hello(){
            return "Hello there!<br>";
        }
    }

    class Android extends Smartphone{
        public function hello(){
            $v = parent::hello();
            return $v."android";
        }
    }

    $android = new Android();
    echo $android->hello();
?>