<?php
    require_once __DIR__ .'/../traits/trait.php';
    class Category 
    {
        use Name;
        public $icon;

        public function __construct($name, $icon)
        {
            $this-> name = $name;
            $this-> icon = $icon;
        }
    }