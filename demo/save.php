<?php


require_once "../utils.php";


generateTitle("--- data received");




// I need here to display received data ---> later save in file , cookies, sessions, db

# you can access form data --->

# either sending get, post request , you can find data
# $_REQUEST
generateTitle("Access form data", "blue", 1);
//var_dump($_REQUEST); # data of request regradless method --> found in $_REQUEST


generateTitle("get Post Data", "green", 1);
//var_dump($_POST);
// display content of data
// access array content
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];


var_dump($name, $email, $message, $subject);

//generateTitle("display GeT Data", "red", 1);
//var_dump($_GET);

?>

<h1> Hii</h1>
<div id="resultCard" class="mt-4">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Submitted Data</h4>
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

