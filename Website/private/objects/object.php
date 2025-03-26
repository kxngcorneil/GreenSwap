<?php 

class object{

    private $objectName;
    private $objectPrice;
    private $objectCategory;
    private $objectDescription;

    public function Objectconstructer($objectName, $objectPrice, $objectCategory, $objectDescription){
        $this->objectName = $objectName;
        $this->objectPrice = $objectPrice;
        $this->objectCategory = $objectCategory;
        $this->objectDescription = $objectDescription;
    }

    public function setObjectName($objectName){
        $this->objectName = $objectName;
    }
    public function getObjectName(){
        return $this->objectName;
    }

    public function setObjectPrice($objectPrice){
        $this->objectPrice = $objectPrice;
    }

    public function getObjectPrice(){
        return $this->objectPrice;
    }

    public function setObjectCategory($objectCategory){
        $this->objectCategory = $objectCategory;
    }

    public function getObjectCategory(){
        return $this->objectCategory;
    }

    public function setObjectDescription($objectDescription){
        $this->objectDescription = $objectDescription;
    }

    public function getObjectDescription(){
        return $this->objectDescription;
    }

}


?>