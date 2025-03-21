<?php


require_once "utils.php";
require_once "helpers.php";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];
$id = generateID();


/// save data to the file

    $info = "{$id}:{$name}:{$email}:{$subject}:{$message}\n";

    $saved = appendDataTofile("students.txt", $info);

    if($saved) {
        echo '<h1 class="mt-5 fw-bold text-primary">🎉 Data Saved! 🎉</h1>';
        // redirect to the data Table ???
//        header("Location:dataTable.php");

        echo '<a class="btn btn-primary btn-lg shadow-lg rounded-pill px-4 py-2 fw-bold" href="dataTable.php">
                🚀 Display All Messages
              </a>';

    }else{
        echo '<h1 class="mt-5 fw-bold text-danger">🎉 Contact your Admin 🎉</h1>';
    }



// see in the table

?>
<!--<h1 class="text-center mt-5 fw-bold text-primary">-->
<!--    🎉 Thank You for Submitting Your Data! 🎉-->
<!--</h1>-->

<div id="resultCard" class="mt-4">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Submitted Data</h4>
            <p><strong>ID:</strong> <span id="displayName">
                    <?php echo $id;?>
                </span></p>
            <p><strong>Name:</strong> <span id="displayName">
                    <?php echo $name;?>
                </span></p>
            <p><strong>Email:</strong> <span id="displayEmail">
                     <?php echo $email;?>
                </span></p>
            <p><strong>Subject:</strong> <span id="displaySubject">
                    <?php echo $subject;?>
                </span></p>
            <p><strong>Message:</strong></p>
            <p id="displayMessage" class="border p-3 bg-light">
                <?php echo $message;?>
            </p>
        </div>
    </div>
</div>

