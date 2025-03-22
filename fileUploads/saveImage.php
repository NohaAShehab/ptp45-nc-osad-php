<?php


    require_once('../utils.php');


    generateTitle("file Upload");

    echo "<pre>";

    # any uploaded file --> you will not find in $_POST, you will find $_FILES
    var_dump($_POST);

    var_dump($_FILES);

    // the image is uploaded to a path to the server ??
    // I need to save images ??
    // Image is uploaded to this path tmp_name ??

    # you need to move_uploaded_file(tmpname, newname)


    // validate if image uploaded or not. --> before proceeding to upload ??
    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $valid_extensions = array("jpeg", "jpg", "png");
    $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    var_dump($ext);

    if(empty($image_name) and empty($image_tmp)  or ! in_array($ext, $valid_extensions)) {
        header('location:upload.php?error=please uplaod valid image file');
    }else{

        // get extension


        $image_name = explode("/", $image_tmp);
        $image_name = end($image_name).".".$ext;
        #var_dump($image_name);



        // I need to save file
        $uploaded=move_uploaded_file($image_tmp, "images/" . $image_name);
        $imagePath = "images/" . $image_name;
        if($uploaded){
            echo "<h1> Image uploaded successfully </h1>";
        }else{
            echo "<h1> Error uploading image </h1>";
        }
    }

    function deleteImage($image_path){
        if(file_exists($image_path)){
            unlink($image_path);
        }

    var_dump($_REQUEST, $_SERVER['REQUEST_METHOD']);
    }
?>

   <div class="mt-5">
        <div class="card custom-card">
            <img src="<?php echo $imagePath; ?>" alt="Uploaded Image"

                 class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Uploaded Image</h5>
                <p class="card-text">Your image has been uploaded successfully. You can view it above.</p>
                <a href="<?= htmlspecialchars($imagePath) ?>" target="_blank" class="btn btn-primary">View Full Size</a>
                <button type="submit" name="deleteImage"  class="btn btn-danger">Remove Image</button>
            </div>
        </div>
   </div>








