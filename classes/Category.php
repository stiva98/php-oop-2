<?php
    require_once __DIR__ .'/../traits/trait.php';
    class Category 
    {
        use Name;

        public function __construct($name)
        {
            $this-> name = $name;
        }
    }