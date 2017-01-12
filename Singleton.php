<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.01.2017
 * Time: 15:41
 */
final class Singleton
{
    private static $instance;

    private $DB;

    private $config = [
        'name' => 'myDB',
        'user' => 'Alex',
        'password' => 'password'
    ];

    public function setDB()
    {
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=' . $this->config['name'];

        try
        {
            $this->DB = new PDO($dsn, $this->config['user'], $this->config['password']);
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function testQuery()
    {
        $result = $this->DB->query("SELECT * FROM goods;");
        var_dump($result);
        return $result;
    }

    public function showResult($result)
    {
        function printResult($data)
    {
        echo "<br/>Table:goods<br/>";
        foreach ($data as $row)
        {

            foreach ($row as $col){
                echo $col."\n";
            }
            echo "<br/>";
        }
    }
        $data = $result->fetchAll(PDO::FETCH_NUM);
        printResult($data);
    }

    public function addNewItem()
    {
        try{
        $sql = "INSERT INTO goods (name,price,description) VALUES ('Candy9','117','Karamel');";
        $sth = $this->DB->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $sth->execute();
        //var_dump($item);
            }
            catch(\PDOException $e)
            {
                echo $e->getMessage();
            }
    }

    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}