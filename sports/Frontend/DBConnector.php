<?php


class DBConnector {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mydb";

    public function connect() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>
