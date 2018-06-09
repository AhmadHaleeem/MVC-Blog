<?php
    class HomeController{

        protected $load = array();

        public function __construct()
        {
            $this->load = new Load();
        }

    }