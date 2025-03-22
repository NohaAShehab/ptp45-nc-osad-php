<?php


function drawTable($header, $tableData, $deleteurl='delete.php', $show="show.php", $edit='edit.php') {

    echo '<div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
            <tr>';
    foreach ($header as $value) {
        echo "<th>$value</th>";
    }
    echo "<th>Show</th> <th>Edit</th> <th>Delete</th>";
    echo "</tr></thead><tbody>";

    foreach ($tableData as $row) {
        echo "<tr>";
        foreach ($row as  $field) {
            echo "<td>{$field}</td>";
        }
        echo "<td> <a class='btn btn-info' href='{$show}?id={$row[0]}'>Show</a>
            <td> <a class='btn btn-warning' href='{$edit}?id={$row[0]}'>Edit</a>
            <td> <form method='post' action='{$deleteurl}'> 
            <input type='hidden' name='id' value='{$row[0]}'>
            <input type='submit' class='btn btn-danger' value='Delete'>
            </form> </td>";

        echo "</tr>";
    }

    echo "</tbody></table></div> </div>";

}


function generateID(){
    if(file_exists("ids.txt")){
        // read id in ids.txt
        $id=  file_get_contents("ids.txt");
        $id = (int)$id + 1;
        // increment +1
    }else{
        $id  =1 ;
    }
    // save incremented in the ids.txt
    file_put_contents("ids.txt", $id);
    // return with id
    return $id;
}


function appendDataTofile($filename, $data){
    $fileobject= fopen($filename, "a");
    if ($fileobject) {
        fwrite($fileobject, $data);
        fclose($fileobject);
        return true;
    }

    return false;

}


function validatePostData($postData){
    $errors = [];
    $valid_data = [];
    foreach ($postData as $key => $value) {
        if(! isset($value) or empty($value)){
            $errors[$key] = ucfirst("{$key} is required");
        }else{
            $valid_data[$key] = trim($value);  # trim extra from beginning and the end of the string
        }
    }
    return ["errors" => $errors, "valid_data" => $valid_data];
}

// FUNCITON TO VALIDATE THE FILES UPLOADED.