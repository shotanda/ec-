<?php
require_once('menu.php');

Class Food extends Menu{


public function __construct($name, $price, $image,){
    parent::__construct($name,$price,$image);
}


}
?>