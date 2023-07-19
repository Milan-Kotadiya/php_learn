<?php
$server = "localhost";
$userName = "root";
$passWord = "";

$connect = mysqli_connect($server, $userName, $passWord);
var_export($connect, true);

if ($connect) {
    echo "Connection established \n";
} else {
    echo "Connection failed \n";
}

class DBcommon
{
    public function createDb($dbName)
    {
        global $connect;
        define("createQuery", "CREATE DATABASE $dbName");
        if ($connect->query(createQuery) == true) {
            echo "\n";
            echo "database created dbName=> $dbName";
        } else {
            echo "\n";
            echo "error found" . $connect->error;
        }
    }
    public function closeConnection()
    {
        global $connect;
        if ($connect) {
            $connect->close();
            echo "Connection Closed \n";
        } else {
            echo "connection not found";
        }
    }
    public function dropDb($dbName)
    {
        global $connect;
        define("deleteQuery", "DROP DATABASE $dbName");
        if ($connect->query(deleteQuery) == true) {
            echo "\n";
            echo "database deleted dbName=> $dbName";
        } else {
            echo "\n";
            echo "error found" . $connect->error;
        }
    }
    public function createTable($tableName, $dbName)
    {
        global $connect;

        $connect->query("USE $dbName");
        define("createTableQuery", "CREATE TABLE $tableName (
        PersonID int,
        LastName varchar(255),
        FirstName varchar(255),
        Address varchar(255),
        City varchar(255)
    );");
        if ($connect->query(createTableQuery) == true) {
            echo "\n";
            echo "Table created Table Name=> $tableName";
        } else {
            echo "\n";
            echo "error found" . $connect->error;
        }
    }
    public function deleteTable($tableName, $dbName)
    {
        global $connect;
        $connect->query("USE $dbName");
        define("deleteTableQuery", "DROP TABLE $tableName;");
        if ($connect->query(deleteTableQuery) == true) {
            echo "\n";
            echo "Table deleted Table Name=> $tableName";
        } else {
            echo "\n";
            echo "error found" . $connect->error;
        }
    }
    public function useDb($dbName)
    {
        global $connect;
        define("selectDbQuery", "USE $dbName");
        if ($connect->query(selectDbQuery) == true) {
            echo "\n";
            echo "Now You are Using dbName=> $dbName";
        } else {
            echo "\n";
            echo "error found" . $connect->error;
        }
    }
    public function selectAllfromTable($dbName, $tableName)
    {
        global $connect;
        $connect->query("USE $dbName");
        $selectQuery = "SELECT * FROM $tableName";
        $result = $connect->query($selectQuery);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . "migrations " . $row["migration"] . " <br>";
            }
        } else {
            echo "0 results";
        }
        $connect->close();
    }
}
$dbFunctions = new DBcommon();
var_export($dbFunctions, true);
