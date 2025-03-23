<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// add all the common functionalities . styles --->

// use bootstrap in all pages

// wirte bootstrap cdn links ??

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

echo "<div class='container'> <pre>";

function generateTitle($title, $color='black', $size=1){
    echo "<hr>";
    echo "<h{$size} class='mt-5 fw-bold text-primary text-center'>🎉 {$title}  🎉</h{$size}>";
}


function displayError($error_message){
    echo '<div class="alert alert-danger" role="alert">';
    echo "<h2 class='mb-0'>❌ { $error_message} </h2> </div>";
}

function displaySuccess($success_message){
    echo '<div class="alert alert-success" role="alert">';
    echo '<h2 class="mb-0">✅ ' . $success_message . '</h2>';
    echo '</div>';
}
function drawlines(){

    echo str_repeat("<br>",10);
}

function brk(){
    echo "<br>";
}





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











