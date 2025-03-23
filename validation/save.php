<?php


require_once "utils.php";
require_once "helpers.php";
require_once "db/db_operations.php";



    /// validate Post Data

    $formDataIssues = validatePostData($_POST);
    $formErrors = $formDataIssues["errors"];
    $validatedData= $formDataIssues["valid_data"];

    $file_errors = validateUploadedFile($_FILES, ['png', 'jpg', 'jpeg']);
    $image_errors = $file_errors["errors"];
    $validImageData = $file_errors["valid_data"];

    if(count($image_errors)) {
        $formErrors=array_merge($formErrors, $image_errors);

    }

    // FUNCTION TO VALIDATE FILES

    if(count($formErrors)) {

        $errors = json_encode($formErrors);
        $queryString ="errors={$errors}";
        $old_data = json_encode($validatedData);
        if($old_data){
            $queryString .= "&old={$old_data}";
        }


        header("location:register.php?{$queryString}");
    }
    else {

        // save the validated data
        $name = $validatedData["name"];
        $email = $validatedData["email"];
        $message = $validatedData["message"];
        $subject = $validatedData["subject"];

        // upload image

        $image_name = "{$validImageData['tmp_name']}.{$validImageData['extension']}";

        #var_dump($image_name);
        // I need to save file
        $uploaded=move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image_name);
        $imagePath = "images/" . $image_name;
        if($uploaded){
            echo "<h1> Image uploaded successfully </h1>";
        }else{
            echo "<h1> Error uploading image </h1>";
        }




        /// use data to insert the object

        $id = insertData($name, $email, $message,$subject,  $imagePath);


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

