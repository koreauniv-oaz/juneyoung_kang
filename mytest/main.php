<?php
    include('./dbconfig.php');

    $query1 = "SELECT * FROM mytest where delta='4'";
    $row1 = mysqli_fetch_row($mysqli->query($query1));
    //print_r($row1);

    $query2 = "SELECT * FROM mytest where delta='4'";
    $row2 = mysqli_fetch_assoc($mysqli->query($query2));
    //print_r($row2);

    function resultToArray($result) {
        $rows = array();
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    // Usage
    $query = "SELECT * FROM mytest where delta='4'";
    $result = $mysqli->query($query);
    $rows = resultToArray($result);
    var_dump($rows); // Array of rows
    $result->free();
?>