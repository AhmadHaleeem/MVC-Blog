<?php

    class Ahmad extends HomeController {

        public function __construct()
        {
//            echo 'Welcome';
        }

        public function method($param) {
            echo 'Hello ' . $param;
        }
    }