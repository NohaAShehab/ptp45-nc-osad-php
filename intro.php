<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: white;
        }
    </style>
</head>
<body>
    <h1> Hello from PHP Course </h1>
    <h2> Welocome Open source Track <3 </h2>

    <?php  echo "ITI" ?>

    <?php echo "<h1 style='color: red; text-align: center;'> Hello from iti </h1>" ?>



    <p> php code is executed on the server and return to the browser
        plain text (html , css , js) </p>


    <h1> Today's date</h1>
    <?php echo date('H:i , jS F Y'); ?>

    <div style="background: beige">
    <?php
        echo "<h1>Hello from PHP Course</h1>";

        echo "<h1>NC </h1>";

        echo "Test";
        echo "hello";

        echo "              bye" ;

        // this a comment in php
        # this is a comment in php
        /*
         * this is a comment in php
         * */

    ?>
    </div>

    <script>
        alert("hiiiii");
    </script>
</body>
</html>