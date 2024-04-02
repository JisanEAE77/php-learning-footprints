<?php

class Database
{
    public $conn;
    public function __construct($config, $user, $pass)
    {
        $confString = "mysql:" . http_build_query($config, "", ";");
        $this->conn = new PDO($confString, $user, $pass, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($q, $params)
    {
        $query = $this->conn->prepare($q);
        $query->execute($params);

        return $query;
    }
}

$config = require("config.php");

$db = new Database($config["dbconfig"], $config["dbuser"]["user"], $config["dbuser"]["pass"]);

$id = $_GET['id'];

$q = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $id];

$result = $db->query($q, $params)->fetchAll();
echo "<pre>";
var_dump($result);
echo "</pre>";

die();
