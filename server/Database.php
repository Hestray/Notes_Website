<?php
class Database {
    public $conn;
    public $db;

    public function __construct($config, $user = 'root', $pass = '') {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        try {
            $this->conn = new PDO($dsn, $user, $pass, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (Exception) {
            echo "Something went wrong with database connection.";
            // throw RuntimeException("Runtime failed.");
        }
    }

    public function query($query, array $params) {
        $statement = $this->conn->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}