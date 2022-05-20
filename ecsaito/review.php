<?php 
class Review{
    private $menuname;
    private $body;


public function __construct($menuname,$body){
    $this->manuname=$menuname;
    $this->body;
}

public function getMenuname(){
    return $this->menuname;
}

public function getBody(){
    return $this->body;
}
} 


?>