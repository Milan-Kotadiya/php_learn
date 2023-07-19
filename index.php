<?php
include './connection/sqlConnection.php';
include './functions/functions.php';




function createDb($dbName)
{
    global $connect;
    define('createQuery', "CREATE DATABASE $dbName");
    if ($connect->query(createQuery) == true) {
        echo '<br/>';
        echo "database created dbName=> $dbName";
    } else {
        echo '<br/>';
        echo 'error found' . $connect->error;
    }
}
function dropDb($dbName)
{
    global $connect;
    define('deleteQuery', "DROP DATABASE $dbName");
    if ($connect->query(deleteQuery) == true) {
        echo '<br/>';
        echo "database deleted dbName=> $dbName";
    } else {
        echo '<br/>';
        echo 'error found' . $connect->error;
    }
}
function createTable($tableName, $dbName)
{
    global $connect;

    $connect->query("USE $dbName");
    define('createTableQuery', "CREATE TABLE $tableName (
        PersonID int,
        LastName varchar(255),
        FirstName varchar(255),
        Address varchar(255),
        City varchar(255)
    );");
    if ($connect->query(createTableQuery) == true) {
        echo '<br/>';
        echo "Table created Table Name=> $tableName";
    } else {
        echo '<br/>';
        echo 'error found' . $connect->error;
    }
}
function deleteTable($tableName, $dbName)
{
    global $connect;
    $connect->query("USE $dbName");
    define('deleteTableQuery', "DROP TABLE $tableName;");
    if ($connect->query(deleteTableQuery) == true) {
        echo '<br/>';
        echo "Table deleted Table Name=> $tableName";
    } else {
        echo '<br/>';
        echo 'error found' . $connect->error;
    }
}
function useDb($dbName)
{
    global $connect;
    define('selectDbQuery', "USE $dbName");
    if ($connect->query(selectDbQuery) == true) {
        echo '<br/>';
        echo "Now You are Using dbName=> $dbName";
    } else {
        echo '<br/>';
        echo 'error found' . $connect->error;
    }
}
function selectAllfromTable($dbName, $tableName)
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

// CLOSE SQL CONNECTION
// $connect->close();

// createDb('sqlmilandatabase');
// dropDb('sqlmilandatabase');
// useDb('sqlmilandatabase');
// createTable('testtable','sqlmilandatabase');
// deleteTable('testtable', 'sqlmilandatabase');
// selectAllfromTable('neo_project', 'migrations');
