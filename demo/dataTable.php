<?php
    require_once "utils.php";
    require_once "helpers.php";

    $lines = file("students.txt");
    $table  =[];
//    var_dump($lines);
    if ($lines) {
        #prepare data
        foreach ($lines as $line) {
            $line = trim($line);  # remove extra spaces and \n
            # split line to fields
            $line = explode(":", $line);  # split line to array 
//            print_r($line);
            $table[] = $line;  # append line in the array 
        }
    }


//    echo "<pre>";
//    print_r($table);
//    echo "</pre>";
    echo "<h1 style='text-align: center'> Students Messages</h1>";
    $headers = ["ID", "Name", "Email", "Subject", "Message"];

    drawTable($headers, $table);
?>




