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
        foreach ($row as $index=>  $field) {
            if($index==5){
                echo "<td><img src='{$field}' width='100' height='100'> </td>";

            }else {
                echo "<td>{$field}</td>";
            }
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

function validateUploadedFile($files, $extensions){

    $errors = [];
    $valid_data = [];

    #var_dump("files here", $files);

    foreach ($files as $file) {
        if (empty($file['tmp_name'])) {
            $errors["image"] = ucfirst("Image is required");
            return ["errors" => $errors, "valid_data" => $valid_data];
        }else{
            $tmp_name = explode("/", $file['tmp_name']);
            $valid_data['tmp_name'] = end($tmp_name);
        }
        $extention = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($extention, $extensions)) {
            $errors["image"] = ucfirst("Invalid file extension");
        }else{
            $valid_data['extension'] = $extention;
        }

    }



    return ["errors" => $errors, "valid_data" => $valid_data];

}










