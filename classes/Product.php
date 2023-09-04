<?php
    class Product 
    {
        public $title;
        protected $price;
        protected $id;
        public $image;
        public $notes;
        public $name;
        public Category $category;

        public function __construct(
            $name,
            $title,
            $price,
            $id,
            $image,
            $notes,
            $categoryName
        )
        {
            $this->name = $name;
            $this->title = $title;
            $this->price = $price;
            $this->id = $id;
            $this->image = $image;
            $this->notes = $notes;
            $this->category = new Category($categoryName);
        }

        public function setPrice($price)
        {
            $this-> price = $price;
        }
        public function setId($id)
        {
            $this-> id = $id;
        }
        public function getPrice()
        {
            return $this-> price;
        }
        public function getId()
        {
            return $this-> id;
        }
    }

    $products = [
        new Product(
            'Toys',
            'Super giocattolo',
            '49 euro',
            1,
            'giocattolo.jpg',
            'Solo per cani docili',
            'Cane',
        ),
        new Product(
            'Food',
            'Umido',
            '12 euro',
            2,
            'giocattolo.jpg',
            'Solo per gatti con problemi di stomaco',
            'Gatto',
        ),
        new Product(
            'Kennel',
            'Cuccia di legno',
            '100 euro',
            3,
            'giocattolo.jpg',
            'Solo per cani di taglia grande',
            'Cane',
        )
    ];