<?php

class Database { // thuộc tính tĩnh kết nối đến csdl
    public static  $connection = null;

    //tạo ra hàm khởi tạo cho class
    public function  __construct()
    {
        if(self::$connection) {//khác null
            return self::$connection;
        }
        $this->connect();

        return self::$connection;
    }

    public function connect() {
        $serverName = "localhost";
        $username = "root";
        $password="";
        $dbName="ajax_sql";

        self::$connection = new mysqli($serverName, $username, $password, $dbName);

        if(self::$connection->connect_error) {
            die("không thể kết nối đến csdl");
        }
    }

    public function disconnect() {

        self::$connection->close();

    }
}