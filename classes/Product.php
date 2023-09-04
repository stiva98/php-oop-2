<?php
require_once __DIR__ .'/Category.php';
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
            'Pupazzo',
            '49.00€',
            1,
            'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/bday/dog/6/400/86497_pla_birthday_dog_fg_1985_6.jpg',
            'Solo per cani docili',
            'Cane',
        ),
        new Product(
            'Food',
            'Umido',
            '12.00€',
            2,
            'https://shop-cdn-m.mediazs.com/bilder/smilla/yummy/x/g/alimento/umido/per/gatti/1/400/62223_pla_smilla_yummypot_beef_400g_1.jpg',
            'Solo per gatti con problemi di stomaco',
            'Gatto',
        ),
        new Product(
            'Kennel',
            'Cuccia di legno',
            '100.00€',
            3,
            'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/special/5/400/55859_PLA_hundehuette_spike_special_98853_1_5.jpg',
            'Solo per cani di taglia grande',
            'Cane',
        )
    ];