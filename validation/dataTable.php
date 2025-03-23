<?php
    require_once "utils.php";
    require_once "helpers.php";

    require_once "db/db_operations.php";

    $table  =selectData();

    echo '<h1 class="text-center mt-5 fw-bold text-primary">🎉 Students Messages ! 🎉</h1>';
    $headers = ["ID", "Name", "Email", "Subject", "Message", "Images"];

    drawTable($headers, $table);
?>




