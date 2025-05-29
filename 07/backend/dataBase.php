<?php
class Database
{
    public static function getInstance()
    {
        return new PDO("mysql:host=localhost;dbname=venda;charset=utf8","root","");
    }
}
?>
