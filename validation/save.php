<?php


require_once "utils.php";
require_once "helpers.php";

/// validate if data exists or not ??
// go through each element in the array 00> isset, not empty ??
//if(isset($_POST["name"])  && ! empty($_POST["name"])){
//    echo "value found";
//}else{
//    echo "Missing Name , ";
//    exit;
//}



/// validate Post Data

    $formDataIssues = validatePostData($_POST);
    $formErrors = $formDataIssues["errors"];
    $oldData= $formDataIssues["valid_data"];

    print_r($formErrors);

    if(count($formErrors)) {

        // I need to send errors to the form --> display them in the form
        # send error to the form in url ??
        # convert error array to string
        # jsonstring
        $errors = json_encode($formErrors);
//        var_dump($errors);
//        exit;
        $queryString ="errors={$errors}";
        $old_data = json_encode($oldData);
        if($old_data){
            $queryString .= "&old={$old_data}";
        }


        header("location:register.php?{$queryString}");
    }
    else {


        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];
        $id = generateID();


        /// save data to the file

        $info = "{$id}:{$name}:{$email}:{$subject}:{$message}\n";

        $saved = appendDataTofile("students.txt", $info);

        if ($saved) {
            echo '<h1 class="mt-5 fw-bold text-primary">🎉 Data Saved! 🎉</h1>';
            // redirect to the data Table ???
//        header("Location:dataTable.php");

            echo '<a class="btn btn-primary btn-lg shadow-lg rounded-pill px-4 py-2 fw-bold" href="dataTable.php">
                🚀 Display All Messages
              </a>';

        } else {
            echo '<h1 class="mt-5 fw-bold text-danger">🎉 Contact your Admin 🎉</h1>';
        }

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

