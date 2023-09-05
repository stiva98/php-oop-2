<?php
require_once __DIR__ .'/Category.php';
require_once __DIR__ .'/../traits/trait.php';
    class Product 
    {
        use Name;

        protected $price;
        protected $id;
        public $image;
        public $notes;
        public Category $category;

        public function __construct(
            string $name,
            float $price,
            float $id,
            string $image,
            string $notes,
            string $categoryName,
            string $icon
        )
        {
            $this->name = $name;
            $this->setPrice($price);
            $this->id = $id;
            $this->image = $image;
            $this->notes = $notes;
            $this->category = new Category($categoryName, $icon);
        }

        public function setPrice($price)
        {
            if ($price < 0) {
                throw new Exception("Il prezzo NON è gratis!");
            } else {
                $this->price = $price;
            }
        }
        public function setId($id)
        {
            $this-> id = $id;
        }
        public function getPrice()
        {
            return $this-> price;
        }
        // public function getId()
        // {
        //     return $this-> id;
        // }
    }
    try {
        $products = [
            new Product(
                'Pupazzo',
                49,
                1,
                'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/bday/dog/6/400/86497_pla_birthday_dog_fg_1985_6.jpg',
                'Solo per cani docili',
                'Cane',
                'https://th.bing.com/th?id=OIP.abMd3la9z-etIwmkY5nPDQHaH_&w=240&h=259&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2'
            ),
            new Product(
                'Umido',
                12,
                2,
                'https://shop-cdn-m.mediazs.com/bilder/smilla/yummy/x/g/alimento/umido/per/gatti/1/400/62223_pla_smilla_yummypot_beef_400g_1.jpg',
                'Solo per gatti con problemi di stomaco',
                'Gatto',
                'https://th.bing.com/th?id=OIP.FNe-8X8uwCTPkyL4PHSCuwHaHa&w=240&h=240&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2'
            ),
            new Product(
                'Cuccia di legno',
                100,
                3,
                'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/special/5/400/55859_PLA_hundehuette_spike_special_98853_1_5.jpg',
                'Solo per cani di taglia grande',
                'Cane',
                'https://th.bing.com/th?id=OIP.abMd3la9z-etIwmkY5nPDQHaH_&w=240&h=259&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2'
            )
        ];
    }
    catch(Exception $e) {
        echo '<h6> Si è verificato un errore: '.$e->getMessage().'</h6>';
    }