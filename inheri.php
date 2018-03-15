<?php
class Box {
    function __construct($item) {
        $this->item = $item;
    }

    function open() {
        echo "宝箱を開いた。".$this->item."を手に入れた。\n";
    }
}

class JewelryBox extends Box {
    function look() {
        echo "宝箱はキラキラと輝いている\n";
    }
}

$box = new Box("鋼鉄の剣");
$box->open();

$jewelrybox = new Jewelrybox("魔法の指輪");
$jewelrybox->look();
$jewelrybox->open();
