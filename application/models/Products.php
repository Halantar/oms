<?php

class Products {
    public function listing() 
    {
        $connection=Yii::app()->db;
        $sql = "SELECT * from products";
        $command = $connection->createCommand($sql); 
        return $command->queryAll();
    }
}
