<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.11.2016
 * Time: 04:11
 */
require_once "INewsDB.class.php";

class NewsDB implements INewsDB
{
    const DB_NAME = "news.db";
    private $_db = null;

    function __get($name)
    {
        if($name == "db"){
            return $this->_db;
        }
        throw new Exception("Unknown property!");
    }
    function __construct()
    {
        $this->_db = new SQLite3(self::DB_NAME);
    }
    function __destruct()
    {
        unset($this->_db);
    }
    
    function saveNews($title, $category, $description, $source)
    {
        // TODO: Implement saveNews() method
    }
    function getNews(){}
    function deleteNews($id){}


}
$news = new NewsDB();