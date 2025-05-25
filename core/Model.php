<?php
namespace Core;
use PDO;
class Model
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = $this->connect();
    }
    public function connect()
    {
        $config = require base_path('config/database.php');
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
        $username = $config['username'];
        $password = $config['password'];

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } 

    // call this function to execute any query without binding params values (simplified) 
    public function rawQuery($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }
}
