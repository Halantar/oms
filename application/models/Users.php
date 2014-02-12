<?php

class Users {
    public function listing() 
    {
        $connection=Yii::app()->db;
        $sql = "SELECT * from users";
        $command = $connection->createCommand($sql); 
        return $command->queryAll();
    }
    public function save($data,$id=NULL) 
    {
        
    }
}
