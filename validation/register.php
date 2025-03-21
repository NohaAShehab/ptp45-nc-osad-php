<?php


    $errors=[];
    $old_data=[];
//    var_dump($_GET);
    // receive errors --> then display it with field
    if(isset($_GET["errors"])){
        $errors = $_GET["errors"];
        echo "<br>";
//        var_dump($errors);
        # convert json string to array

        $errors = json_decode($errors, true);
//        var_dump($errors);
    }

    if(isset($_GET["old"])){
        $old_data=$_GET["old"];
        $old_data = json_decode($old_data, true);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Contact Us</h3>
            <form action="save.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name"
                           name = "name"
                           value='<?php echo $old_data["name"]? $old_data["name"]: ""  ?>'
                           placeholder="Enter your full name" >
                    <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["name"] ? "{$errors['name']}" : ""; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control"
                           name="email"
                           value='<?php echo $old_data["email"]? $old_data["email"]: ""  ?>'
                           id="email" placeholder="Enter your email" >
                    <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["email"] ? "{$errors['email']}" : ""; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select class="form-control" id="subject" name="subject" >
                        <option value="">Choose...</option>
                        <option value="inquiry">General Inquiry</option>
                        <option value="support">Support Request</option>
                        <option value="feedback">Feedback</option>
                    </select>
                    <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["subject"] ? "{$errors['subject']}" : ""; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message"
                              name="message" rows="4" placeholder="Write your message here..." ><?php echo $old_data['message'] ? $old_data['message']: ""?></textarea>
                    <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["message"] ? "{$errors['message']}" : ""; ?>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
